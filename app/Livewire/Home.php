<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\LeaveRequest;
use App\Models\SwipeRecord;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\HolidayCalendar;
use App\Models\SalaryRevision;
use Illuminate\Support\Facades\Auth;

use App\Livewire\TeamOnLeave;

class Home extends Component
{
    public $currentDate;

    public $currentDay;
    public $showAlertDialog = false;
    public $signIn = true;
    public $swipeDetails;
    public $calendarData;
    public $employeeDetails;
    public $employee;
    public $salaries;
    public $count;
    public $initials;
    public $applying_to = [];
    public $matchingLeaveApplications = [];
    public $upcomingLeaveApplications;
    public $leaveRequest;
    public $salaryRevision; // Rename this variable to 'salaries'
    public $pieChartData;
    public $grossPay;
    public $deductions;
    public $netPay;
    public $leaveRequests;
    public $showLeaveApplies;
    public $greetingImage;
    public $greetingText;
 
    public function mount()
    {
        $currentHour = date('G');
 
        if ($currentHour >= 4 && $currentHour < 12) {
            $this->greetingImage = 'sunrise.png';
            $this->greetingText = 'Good Morning';
        } elseif ($currentHour >= 12 && $currentHour < 17) {
            $this->greetingImage = 'afternoon.png';
            $this->greetingText = 'Good Afternoon';
        } elseif ($currentHour >= 17 && $currentHour < 20) {
            $this->greetingImage = 'sunset.png';
            $this->greetingText = 'Good Evening';
        } else {
            $this->greetingImage = 'goodnight.png';
            $this->greetingText = 'Good Night';
        }
    }
    public function toggleSignState()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
        $this->signIn = !$this->signIn;
        SwipeRecord::create([
            'emp_id' => $this->employeeDetails->emp_id,
            'swipe_time' => now()->format('H:i:s'),
            'in_or_out' => $this->signIn ? "OUT" : "IN",
        ]);
        $flashMessage = $this->signIn ? "You have successfully signed out." : "You have successfully signed in.";
        session()->flash('success', $flashMessage);
    }

    public function open()
    {
        $this->showAlertDialog = true;
    }

    public function close()
    {
        $this->showAlertDialog = false;
    }

    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->currentDay = now()->format('l');
        $this->currentDate = now()->format('d M Y');
        $today = Carbon::now()->format('Y-m-d');
        $this->leaveRequests = LeaveRequest::where('status', 'pending')->get();
        $matchingLeaveApplications = [];

        foreach ($this->leaveRequests as $leaveRequest) {
            $applyingToJson = trim($leaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

            $ccToJson = trim($leaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;

            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $matchingLeaveApplications[] = $leaveRequest;
            }
        }

        // Get the count of matching leave applications
        $this->count = count($matchingLeaveApplications);





        //team on leave
        $currentDate = Carbon::today();
        $this->teamOnLeaveRequests = LeaveRequest::with('employee')
            ->where('status', 'approved')
            ->where(function ($query) use ($currentDate) {
                $query->whereDate('from_date', '=', $currentDate)
                    ->orWhereDate('to_date', '=', $currentDate);
            })
            ->get();
        $teamOnLeaveApplications = [];

        foreach ($this->teamOnLeaveRequests as $teamOnLeaveRequest) {
            $applyingToJson = trim($teamOnLeaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

            $ccToJson = trim($teamOnLeaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;

            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $teamOnLeaveApplications[] = $teamOnLeaveRequest;
            }
        }
        $this->teamOnLeave = $teamOnLeaveApplications;

        // Get the count of matching leave applications
        $this->teamCount = count($teamOnLeaveApplications);

        $this->upcomingLeaveRequests = LeaveRequest::with('employee')
            ->where('status', 'approved')
            ->where(function ($query) use ($currentDate) {
                $query->whereMonth('from_date', Carbon::now()->month); // Filter for the current month
            })
            ->orderBy('created_at', 'desc')
            ->get();
        $this->upcomingLeaveApplications = count($this->upcomingLeaveRequests);

        $this->swipeDetails = DB::table('swipe_records')
            ->whereDate('created_at', $today)
            ->where('emp_id', $employeeId)
            ->orderBy('created_at', 'desc')
            ->get();

        // Assuming $calendarData should contain the data for upcoming holidays
        $this->calendarData = HolidayCalendar::where('date', '>=', $today)
            ->orderBy('date')
            ->take(3)
            ->get();

        $this->salaryRevision = SalaryRevision::where('emp_id', $employeeId)->get();
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;

        $isManager = EmployeeDetails::where('manager_id', $loggedInEmpId)->exists();

        $this->showLeaveApplies = $isManager;


        //##################################### pie chart details #########################
        $sal = new SalaryRevision();
        $this->grossPay = $sal->calculateTotalAllowance();
        $this->deductions = $sal->calculateTotalDeductions();
        $this->netPay = $this->grossPay - $this->deductions;

        // Pass the data to the view and return the view instance
        return view('livewire.home', [

            'calendarData' => $this->calendarData,
            'salaryRevision' => $this->salaryRevision,
            'showLeaveApplies' => $this->showLeaveApplies,
            'count' => $this->count,
            'teamCount' => $this->teamCount,
            'teamOnLeave' => $this->teamOnLeave,
            'matchingLeaveApplications' => $matchingLeaveApplications,
            'upcomingLeaveRequests'  => $this->upcomingLeaveRequests,
            'upcomingLeaveApplications' => $this->upcomingLeaveApplications,
        ]);
    }
}
