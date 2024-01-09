<div>
    <!DOCTYPE html>
    <html lang="en">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="{{ asset('livewire/livewire.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
            }
 
            .left-menu {
                width: 150px;
                font-family: 'Montserrat', sans-serif;
                background-color: #f0f0f0;
                padding: auto 30px;
 
                /* Add a vertical line to the right of the left menu */
            }
 
            .left-menu h2 {
                font-family: 'Montserrat', sans-serif;
            }
 
            table {
                border-collapse: collapse;
                width: 100%;
            }
 
            th,
            td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
 
 
            th {
                background-color: #f2f2f2;
            }
 
            .greet {
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                tab-size: 4;
                -webkit-text-size-adjust: 100%;
                visibility: inherit;
                font-family: Open Sans, sans-serif;
                font-size: 14px;
                font-weight: 400;
                font-style: normal;
                font-stretch: normal;
                line-height: normal;
                letter-spacing: normal;
                text-align: left;
                box-sizing: border-box;
                border: 0 solid;
                --tw-shadow: 0 0 transparent;
                --tw-ring-inset: var(--tw-empty, );
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgba(59, 130, 246, 0.5);
                --tw-ring-offset-shadow: 0 0 transparent;
                --tw-ring-shadow: 0 0 transparent;
            }
 
            .banner-ad {
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                tab-size: 4;
                -webkit-text-size-adjust: 100%;
                visibility: inherit;
                font-family: Open Sans, sans-serif;
                font-weight: 400;
                font-style: normal;
                font-stretch: normal;
                letter-spacing: normal;
                text-align: left;
                box-sizing: border-box;
                border: 0 solid;
                --tw-shadow: 0 0 transparent;
                --tw-ring-inset: var(--tw-empty, );
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgba(59, 130, 246, 0.5);
                --tw-ring-offset-shadow: 0 0 transparent;
                --tw-ring-shadow: 0 0 transparent;
                font-size: 1rem;
                line-height: 1.5rem;
                max-width: 32rem;
                --tw-text-opacity: 1;
                color: rgba(103, 122, 142, var(--tw-text-opacity));
            }
 
 
            @keyframes mergeAndJumble {
                0% {
                    transform: translate(0, 0);
                }
 
                25% {
                    transform: translate(100px, 0);
                }
 
                50% {
                    transform: translate(100px, 100px);
                }
 
                75% {
                    transform: translate(0, 100px);
                }
 
                100% {
                    transform: translate(0, 0);
                }
            }
 
            .animate {
                animation: mergeAndJumble 0.3s forwards;
            }
 
        .animate {
            animation: mergeAndJumble 0.3s forwards;
        }
        .notify{
            display:flex;
            justify-content:space-between;
            padding:5px 10px;
            align-items:center;
        }
        .team-Notify{
            display:flex;
            flex-direction:column;
            justify-content:start;
            padding:5px 10px;
 
        }
 
        .home-hover {
    transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    border-radius:5px;
    }
            .animate {
                animation: mergeAndJumble 0.3s forwards;
            }
 
            .notify {
                display: flex;
                justify-content: space-between;
                padding: 5px 10px;
                align-items: center;
            }
 
            .home-hover {
                transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
                border-radius: 5px;
            }
 
    .home-hover:hover {
        transform: scale(1.01);
        cursor: pointer;
        background-color: #fff;
        box-shadow: 1px 2px rgba(0, 0, 0, 0.2);
    }
    .leave-display{
        padding: 5px 10px;
        display: flex;
        flex-direction:row;
        align-items: center;
        white-space: nowrap;
        overflow: hidden;
        background:#fafafa;
        text-overflow: ellipsis;
        border-top:1px solid #ccc;
        font-size: 12px;
        gap:15px;
    }
    .team-leave{
        display: flex;
        flex-direction:row;
        align-items: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 12px;
        gap:12px;
    }
    .net-salary{
        display: flex;
        flex-direction:row;
        align-items: center;
        white-space: nowrap;
        overflow: hidden;
        justify-content:space-between;
        text-overflow: ellipsis;
    }
    </style>
</head>
<body>
    <div class="container">
    @if (session()->has('success'))
        <div class="custom-alert alert-success" style="text-align: center;margin-left:20%;width: 500px;">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function() {
                const successMessage = document.querySelector('.custom-alert');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 5000);
        </script>
        @endif
 
        </div>
        <div class="content">
            <div class="row m-0 mb-3">
                <div class="col-md-8">
                    <div class="greet">
                    @if($this->greetingText)
                        <h1 class="text-secondary-500 pb-1.5x" style="font-size: 24px; font-family: montserrat;width:45%">{{$greetingText}}</h1>
                     @endif
                    </div>
 
                    <div class="banner-ad text-base max-w-lg text-secondary-400">
                        <carousel class="ng-star-inserted" style="width:470px">
                            <!-- Carousel content goes here -->
                        </carousel>
                        <div class="quote-text">
                            <!-- Quote text will be dynamically inserted here -->
                        </div>
                        <div class="author-text">
                            <!-- Author text will be dynamically inserted here -->
                        </div>
                        <div class="watch-video">
                            <p>Watch the video to understand your new Employee Self Service portal quickly.</p>
                            <a href="https://greytip-2.wistia.com/medias/vbxdhiqvk6" class="text-primary-400 pt-1x cursor-pointer text-sm font-semibold pb-2x inline-block">Watch Video</a>
                        </div>
                    </div>
                </div>
 
                <div class="col-md-4">
                @if($this->greetingImage)
                    <img src="{{ asset('/images/' . $greetingImage) }}" alt=" " style="height: 200px; width:280px;">
                @endif
                <!-- <img id="greeting-image" src="" alt="Greeting Image" style="height: 200px; width:300px ;margin-left:50px; "> -->
        </div>
            </div>
            <!-- main content -->
            <div class="row m-0">
                    <div class="first-col col-md-4 p-1" style="display:flex; flex-direction:column;gap:10px;" >
                        <div class="home-hover">
                               <div class="reviews">
                                  <div style="border-radius: 5px; border: 1px solid #CFCACA;  background-color: white;">
                                    <div class="heading" style="display:flex; justify-content:space-between;padding:5px 10px;">
                                       <div style="color: #677A8E;font-weight:500;">
                                            Review
                                        </div>
                                        <div >
                                          <i class="fa fa-long-arrow-right" aria-hidden="true" style="color: #bbbbba;"></i>
                                        </div>
                                    </div>
                                    @if(($this->count) > 0)
 
                                          <div class="notify">
                                                <p style="color: black; font-size: 1.2rem; font-weight: 500;">
                                                    {{$count}} <br>
                                                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Things to review</span>
                                                </p>
 
                                                <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-notes-icon-png-image_509622.jpg" alt="" style="height: 50px; width: 50px;">
                                            </div>
                                            <div class="leave-display" >
 
                                                @for ($i = 0; $i < min($count, 2); $i++)
                                                    <div class="circle-notify" style="margin-right: 5px; display:flex; flex-direction:column;">
                                                        @php
                                                            function getRandomColor() {
                                                                $colors = ['#FFD1DC', '#B0E57C', '#ADD8E6', '#E6E6FA', '#FFB6C1'];
                                                                return $colors[array_rand($colors)];
                                                            }
                                                        @endphp
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDDbrRPghufD20Fgaa0IFT62n3vLc5lI5B_w&usqp=CAU" alt="" style="height: 40px; width: 40px; border-radius: 50%;  border: 2px solid {{ getRandomColor() }};"><span>Leave</span>
                                                    </div>
 
                                                @endfor
                                                @if ($count > 4)
                                                    <div class="circle-notify" style="color:blue;cursor:pointer; margin-top:20px;display:flex;flex-direction:column;align-items:center;">
                                                      <a href="#" style="color:blue;font-size:0.725rem;">+{{ $count - 4 }}</a>
                                                       <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining" >More</span></p>
                                                    </div>
                                                @endif
                                            </div>
                                        @else
                                           <img src="https://ftl.technology/images/theme-pics/case.png" alt="Image Description" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 80px;">
                                            <p style="color: #677A8E; margin-left: 50px; font-size: 14px; ">
                                                Hurrah! You've nothing to review.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                        </div>
                        <div class="home-hover">
                            <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color: white;">
                                  <div style="color: #677A8E; margin-left: 20px;font-weight:500; margin-top:10px;">
                                                IT Declaration
                                            </div>
                                            <div style="display: flex;">
                                                <img src="https://th.bing.com/th/id/OIP.ISoRyxX3652noSb_DpscdAHaHa?pid=ImgDet&rs=1" alt="Image Description" style="height: 60px; width: 60px; margin-top: 20px; margin-left: 20px;">
                                                <div class="B" style="color:  #677A8E; margin-left: 20px;  font-size: 14px;margin-top:10px">
                                                    <br>Hurrah! Considered your IT declaration for Apr 2023.</br>
                                                    <a href="/formdeclaration" class="button-link">
                                                        <button class="custom-button view-button" style="width:60px;border:1px solid blue;border-radius:5px;margin-bottom:10px;margin-left:120px;color:blue;background:#fff;margin-top:10px;">View</button>
                                                    </a>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                            <div class="home-hover">
                                   <div style=" border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
                                                <div style="color: #677A8E;font-weight:500; margin-left: 20px;  margin-top: 20px;">
                                                    POI
                                                </div>
                                                <div style="display:flex; margin-top: 20px;"> <!-- Added margin-top here -->
                                                    <img src="https://th.bing.com/th/id/OIP.So8FF1OSJHwqUi-IcIgQIgAAAA?pid=ImgDet&w=104&h=109&c=7&dpr=1.5" alt="Image Description" style="height: 30px; width: 30px; margin-top: 10px; margin-left: 20px;">
                                                    <p style="color: #677A8E; margin-left: 20px; font-size: 14px;">Hold on! You can submit your Proof of Investments (POI) once released.</p>
                                                </div>
                                    </div>
                              </div>
 
                              <!-- TEAM ON LEAVE -->
                              @if($this->showLeaveApplies)
                               <div class="home-hover">
                               <div class="reviews">
                                  <div style="border-radius: 5px; border: 1px solid #CFCACA;  background-color: white;">
                                    <div class="heading" style="display:flex; justify-content:space-between;padding:5px 10px;">
                                       <div style="color: #677A8E;font-weight:500;">
                                            Team On Leave
                                        </div>
                                        <div >
                                          <i class="fa fa-long-arrow-right" aria-hidden="true" style="color: #bbbbba;"></i>
                                        </div>
                                    </div>
                                    @if(($this->teamCount) > 0)
                                          <div class="team-Notify">
                                                <p style="color: #778899; font-size: 0.875rem; font-weight: 500;">
                                                    Today({{$teamCount}}) </p>
                                                    <div class="team-leave" >
                                                        @php
                                                            function getRandomLightColor() {
                                                                $colors = ['#FFD1DC', '#B0E57C', '#ADD8E6', '#E6E6FA', '#FFB6C1'];
                                                                return $colors[array_rand($colors)];
                                                            }
                                                        @endphp
 
                                                        @for ($i = 0; $i < min($teamCount, 4); $i++)
                                                                <?php
                                                                    $teamLeave = $this->teamOnLeave[$i] ?? null;
                                                                    if ($teamLeave) {
                                                                        $initials = strtoupper(substr($teamLeave->employee->first_name, 0, 1) . substr($teamLeave->employee->last_name, 0, 1));
                                                                ?>
                                                                    <div class="circle-notify" style="margin-right: 5px; border-radius: 50%; background: #fcfdfe; padding: 8px 8px; border: 2px solid {{ getRandomLightColor() }};">
                                                                        <span>{{$initials}}</span>
                                                                    </div>
                                                                <?php
                                                                    }
                                                                ?>
                                                            @endfor
                                                            @if ($teamCount > 4)
                                                                <div class="circle-notify" style="color:blue;cursor:pointer; margin-top:20px;display:flex;flex-direction:column;align-items:center;">
                                                                <a href="#" style="color:blue;font-size:0.725rem;">+{{ $teamCount - 4 }}</a>
                                                                <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining" >More</span></p>
                                                                </div>
                                                            @endif
                                                        </div>
 
                                                    <div style="margin-top:20px;">
                                                    <p style="color: #778899; font-size: 0.875rem; font-weight: 500;">
                                                    This month({{$upcomingLeaveApplications}}) </p>
                                                    <p style="color: #778899; font-size: 0.825rem; font-weight: 400;"><a href="/team-on-leave-chart">Click here</a> to see who will be on leave in the upcoming days!</p>
                                                    </div>
                                            </div>
                                        @else
                                           <img src="https://ftl.technology/images/theme-pics/case.png" alt="Image Description" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 80px;">
                                            <p style="color: #677A8E; margin-left: 50px; font-size: 14px; ">
                                                Wow!No leaves planned today.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- second column -->
                    <div class="first-col col-md-4 p-1" style="display:flex; flex-direction:column;gap:10px;">
                        <div class="home-hover">
                           <div style=" border-radius: 5px; border: 1px solid #CFCACA;  background-color: #EDF3FF;">
                                    <div style="color: black; padding:10px 15px;">
                                        <p style="font-weight: normal;">{{$currentDate}}</p>
                                        <p style="margin-top: 10px; color: #9E9696; font-size: 12px;">{{$currentDay}} | 10:00 AM to 07:00 PM</p>
                                        <div style=" font-size: 14px;" id="current-time">15 : 19 : 00</div>
                                        <script>
                                            function updateTime() {
                                                const currentTimeElement = document.getElementById('current-time');
                                                const now = new Date();
                                                const hours = String(now.getHours()).padStart(2, '0');
                                                const minutes = String(now.getMinutes()).padStart(2, '0');
                                                const seconds = String(now.getSeconds()).padStart(2, '0');
                                                const currentTime = `${hours} : ${minutes} : ${seconds}`;
                                                currentTimeElement.textContent = currentTime;
                                            }
                                            updateTime();
                                            setInterval(updateTime, 1000);
                                        </script>
                                        <div class="A" style="display: flex;flex-direction:row;justify-content:space-between; align-items:center;margin-top:10px;">
                                            <a style="width:40%;font-size:0.855rem;cursor: pointer;color:blue" wire:click="open">View Swipes</a>
 
                                            <button id="signButton" style="color: white; width: 100px; height: 30px; background-color: rgb(2, 17, 79); border: 1px solid #CFCACA; border-radius: 5px; " wire:click="toggleSignState">
                                                @if ($signIn)
                                                Sign In
                                                @else
                                                Sign Out
                                                @endif
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="home-hover">
                          @forelse($salaryRevision as $salaries)
                             <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color:white;padding:10px 20px;">
                                            <div style="color: #677A8E;  font-weight:500; display:flex;justify-content:space-between;">
                                                Payslip
                                                <a href="/slip" style="font-size:16px; ">&rarr;</a>
                                            </div>
 
                    <div style="display:flex">
                        <div style="position: relative;">
                            <canvas id="outerPieChart" width="150" height="150"></canvas>
                            <canvas id="innerPieChart" width="150" height="150" style="position: absolute; top: -10px; left: 0px;"></canvas>
                        </div>
 
 
 
                        <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 60px;margin-top: 30px; font-weight: 100; color: #9E9696">
                            <br>{{ date('M Y', strtotime('-1 month')) }}</br>
                            <br>{{ date('t', strtotime('-1 month')) }}</br>
                            <br>Paid Days</br>
                        </div>
 
                    </div>
 
                    <div style="display:flex ;color: #677A8E; font-size: 14px;  font-weight:100px;margin-top:-2px">
                        <br style="margin-top:-10px">Gross Pay</br>
                        <br>Deduction</br>
                        <br>Net Pay</br>
 
                        <div style="margin-left:120px;margin-top:22px">
                            <p>₹{{$salaries->calculateTotalAllowance(), 2}}</p>
                            <p>₹{{$salaries->calculateTotalDeductions(), 2}}</p>
                            @if ($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions() > 0)
                            <p style="margin-top:5px"> ₹{{ number_format($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions(), 2) }}</p>
                            @endif
 
                        </div>
                    </div>
                    <div class="column" style="display: flex; color: #1090D8; font-size: 14px;  margin-top: 20px; font-weight: 100;">
 
                        <a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download style="margin-left: 10px; display: inline-block;">Download PDF</a>
                        <p style="margin-left: 80px;">Show Salary</p>
                    </div>
 
                </div>
                @empty
                <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color:white;">
                    <div style="color: #677A8E;font-weight:500; margin-left: 10px;  margin-top: 10px;">
                        Payslip
                        <a href="/slip" style="font-size:16px; margin-left: 180px;">&rarr;</a>
                        <div style="display:flex;align-items:center;flex-direction:column;">
                            <img src="https://cdn3.iconfinder.com/data/icons/human-resources-70/133/9-512.png" alt="" style="height:75px;width:75px;">
                            <p style="color: #677A8E;  margin-bottom: 20px; font-size:0.875rem;"> We are working on your payslip!</p>
                        </div>
                    </div>
 
                </div>
                @endforelse
            </div>
            @if ($showAlertDialog)
            <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                            <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Swipes</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                                <span aria-hidden="true" style="color: white;">×</span>
                            </button>
                        </div>
                        <div class="modal-body" style="max-height:500;overflow-y:auto">
                            <div class="row">
                                <div class="col" style="font-size: 10px;">Date : <b>{{$currentDate}}</b></div>
                                <div class="col" style="font-size: 10px;">Shift Time : <b>10:00 to 19:00</b></div>
                            </div>
                            <table border="1" style="margin-top: 10px;">
                                <tr>
                                    <th style="font-size: 12px; color: grey;">Swipe Time</th>
                                    <th style="font-size: 12px; color: grey">Sign-In / Sign-Out</th>
                                </tr>
 
                                @if (!is_null($swipeDetails) && $swipeDetails->count() > 0)
                                @foreach ($swipeDetails as $swipe)
                                <tr>
                                    <td style="font-size: 10px; color: black;">{{ $swipe->swipe_time }}</td>
                                    <td style="font-size: 10px; color: black;">{{ $swipe->in_or_out }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td style="font-size:12px;"                                                                                                                                                                                                                                                                                                                                                                                          colspan="2">No swipe records found for today.</td>
                                </tr>
                                @endif
 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-backdrop fade show blurred-backdrop"></div>
            @endif
        </div>
        <!-- third column -->
        <div class="first-col col-md-4 p-1" style="display:flex; flex-direction:column;gap:10px;">
            <div class="home-hover">
                <div style="border-radius: 5px; border: 1px solid #CFCACA; background-color: white;padding:10px 15px;">
                    <div style="display:flex; justify-content:space-between;">
                        <p style="color: #677A8E;font-weight:500;">Upcoming Holidays</p>
                        <a href="/holiday-calender" style="font-size: 14px;  text-decoration: none; height: 20px; color: black">&rarr;</a>
                    </div>
                    @foreach ($calendarData as $entry)
                    <div>
                        <p style="color: #677A8E;  font-size: 14px;  ">
                            {{ date('d M l', strtotime($entry->date)) }}<br>
                            <span style="font-size: 12px;">{{ $entry->festivals }}</span>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="home-hover">
                <div style="border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
                    <div style="color: #677A8E; font-weight:500; margin-left: 10px; margin-top:10px;">
                        Quick Access
                    </div>
                    <div style="display: flex; justify-content: space-between; position: relative;">
                        <div class="col-md-7" style="color: black;  font-size: 12px;font-family: montserrat; ">
                            <br>Reimbursement</br>
                            <br>IT Statement</br>
                            <br>YTD Reports</br>
                            <br>Loan Statement</br>
                        </div>
                        <div class="col-md-5" style="background-color: #FFF8F0; padding: 5px 10px; border-radius: 5px; font-size: 0.625rem; font-family: montserrat; position: absolute; bottom: 0; right: 0; height:120px;">
                            <p style="margin: 0;">Use quick access to view important salary details.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-hover">
                <div style=" border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
                    <div style="color: #677A8E;font-weight:500; margin-left: 20px;  margin-top: 20px;">
                        Track
                    </div>
 
                    <div>
                        <img src="https://resumekit.com/blog/wp-content/uploads/2023/02/Optimal-outline-for-a-cover-letter-2-1.png" alt="Image Description" style="height: 100px; width: 160px; margin-top: 20px; margin-left: 80px;">
                        <div class="B" style="color: black; margin-left: 20px;  font-size: 14px;">
                            <p style="color: #677A8E; margin-left: 20px;  margin-top: 20px;">All good! You've nothing new to track.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
 
</html>
</div>
<script>
    // Function to change the quote text
    function changeQuote() {
        const quotes = [{
                text: "Life is 10% what happens to us and 90% how we react to it.",
                author: "Dennis P. Kimbro"
            },
            {
                text: "Your new Employee Self Service portal is here. Watch the video to learn more.",
                author: "Anonymous"
            },
            {
                text: "Things usually work out in the end. What if they don't? That just means you haven't come to the end yet.",
                author: "Jeanette Walls"
            }
            // Add more quotes here as needed
        ];
 
        const quoteElement = document.querySelector('.quote-text');
        const authorElement = document.querySelector('.author-text');
        const randomIndex = Math.floor(Math.random() * quotes.length);
        const randomQuote = quotes[randomIndex];
 
        quoteElement.textContent = randomQuote.text;
        authorElement.textContent = `- ${randomQuote.author}`;
    }
 
    // Call the function to initially set the quote
    changeQuote();
 
    // Set an interval to change the quote every 5 seconds (5000 milliseconds)
    setInterval(changeQuote, 5000);
 
 
    var data = {
    labels: ['Gross Pay'],
    datasets: [{
        data: [{{$salaries->calculateTotalAllowance(), 2}}],
        backgroundColor: ['#FF5733'], // Color for Gross Pay
    }],
};
 
var innerData = {
   labels: ['Deductions', 'Net Pay'],
    datasets: [{
        data: [{{$salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions(), 2 }}, {{$salaries->calculateTotalDeductions(), 2}}],
        backgroundColor: ['#3399FF', '#33FF33'], // Colors for Deductions and Net Pay
    }],
};
 
var ctx = document.getElementById('outerPieChart').getContext('2d');
var outerPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: {
        cutout: '70%', // Adjust the cutout to control the size of the inner circle
    },
});
 
var innerCtx = document.getElementById('innerPieChart').getContext('2d');
var innerPieChart = new Chart(innerCtx, {
    type: 'doughnut',
    data: innerData,
    options: {
        cutout: '60%', // Adjust the cutout to control the size of the inner circle
    },
});
</script>
 