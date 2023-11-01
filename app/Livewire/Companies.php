<?php

namespace App\Livewire;

use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Companies extends Component
{
    public $companies;
    public $jobDetails;
    // Add this method to your Livewire component
    public function showCompanyJobDetails($company_id)
    {
        return redirect()->route('company-based-jobs', ['companyId' => $company_id]);
    }

    public function render()
    {
        $this->companies = Company::orderBy('created_at', 'desc')->get();
    
        return view('livewire.companies');
    }
}
