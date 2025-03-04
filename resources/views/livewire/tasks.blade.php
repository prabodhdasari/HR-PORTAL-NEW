<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            /* General Styles */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f0f0f0;
            }

            .task-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }

            .task-header h2 {
                font-size: 1.5rem;
                font-weight: bold;
            }

            /* Profile Information */
            .profile-info {
                display: none;
                /* Initially hidden */
                margin-top: 20px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
            }

            /* Icons */
            .icon {
                font-size: 1.25rem;
                color: #333;
                cursor: pointer;
                margin-left: 10px;
            }

            .icon:hover {
                color: #007BFF;
            }

            .priority-container {
                display: flex;
                margin-top: 20px;
            }

            .priority-option {
                display: flex;
                align-items: center;
                margin-right: 20px;
                cursor: pointer;
            }

            .priority-circle {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                margin-right: 5px;
            }

            /* Priority Colors */
            .priority-low {
                background-color: #1AB89B;
            }

            .priority-medium {
                background-color: #F2B13F;
            }

            .priority-high {
                background-color: #F05454;
            }

            .selected {
                border: 2px solid #007BFF;
            }

            .text-danger {
                font-size: 12px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th {
                background-color: rgb(2, 17, 79);
                color: white;
                padding: 10px;
                font-size: 12px;
                text-align: center;
            }

            td {
                padding: 10px;
                font-size: 12px;
                text-align: center;
                width: 100px;
                /* Adjust this width as needed */
            }

            /* Style the "View File" link */
            a.view-file {
                text-decoration: none;
                color: #007BFF;
            }

            /* Style the "Close" button */
            button.close-button {
                background-color: red;
                color: white;
                border-radius: 5px;
            }
        </style>


<<<<<<< HEAD
        <div class="container" style="margin-top:15px;width:95%; height: 450px; margin-left: 20px; border: 1px solid silver; border-radius: 5px;background-color:white">
            <div class="row">
                <div class="col" style="margin-left:35%;margin-top:15px">
                    <div class="card" style="width:250px;">
=======
        <div class="container" style="margin-top:15px;width: 90%; height: 450px; border: 1px solid silver; border-radius: 5px;background-color:white">
            <div class="row">
                <div class="col-md-9" style="margin-top: 15px; text-align: -webkit-center; padding: 0px;">
                    <div class="card" style="width:fit-content;">
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28
                        <div class="card-header">
                            <div class="row">
                                <button wire:click="$set('activeTab', 'open')" class="col btn @if($activeTab === 'open') btn-success active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px">
                                    Open
                                </button>
                                <button wire:click="$set('activeTab', 'completed')" class="col btn @if($activeTab === 'completed') btn-danger active @else btn-light @endif" style="border-radius: 5px;">
                                    Completed
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="col" style="margin-left:19%">
=======
                <div class="col-md-3" style="padding: 0px; text-align: center;">
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28
                    <button wire:click="show" style="background-color:rgb(2, 17, 79); border: none; border-radius: 5px; color: white; font-size: 12px; height: 30px; cursor: pointer; margin-top: 5px;margin-top:15px">Add
                        New Task</button>
                </div>
            </div>
            @if ($activeTab == "open")
<<<<<<< HEAD
            <div class="card-body" style="background-color:white;width:100%;margin-top:30px;border-radius:5px;overflow-y:auto;max-height:300px">
=======
            <div class="card-body" style="background-color:white;width:100%;margin-top:30px;border-radius:5px;padding: 0px">
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28


                @if ($records->isEmpty())
                <div style="text-align: center">
                    <img style="width: 10em" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
                </div>
                @else
        <div class="table-responsive">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: rgb(2, 17, 79); color: white;">
                            <th style="padding: 10px; font-size: 12px; text-align: center; width: auto">Assigned By</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center; width: auto">Task Name</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Assigneed to</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Priority</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Due Date</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Subject</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Description</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Attach File</th>
                            <th style="padding: 10px; font-size: 12px; text-align: center; width: auto">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $record)
                        @if($record->status=="Open")
                        <tr>
                            <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                            <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px;">{{ $record->task_name }}</td>
                            <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px">{{ $record->assignee }}</td>
                            <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px">{{ $record->priority }}</td>
                            <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px">{{ $record->due_date }}</td>
                            <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px;">{{ $record->subject }}</td>
                            <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px">{{ $record->description }}</td>
                            <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px">
                                @if ($record->file_path)
                                <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;">View File</a>
                                @else
                                N/A
                                @endif
                            </td>
<<<<<<< HEAD
                            <td style="padding: 5px; font-size: 12px; text-align: center; ">
                                <div class="row" style="display: flex; justify-content: space-between;">
                                    <button wire:click="openForTasks('{{$record->id}}')" style="background-color: blue; color: white; border-radius: 5px;">Close</button>
=======
                            <td style="padding: 5px; font-size: 12px; text-align: center; width: 100px;">
                                <div class="m-0 row" style="display: flex; justify-content: space-between;">
                                    <button wire:click="openForTasks('{{$record->id}}')" style="background-color: red; color: white; border-radius: 5px;">Close</button>
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
        </div>

                @endif
                @endif

                @if ($activeTab == "completed")
<<<<<<< HEAD
                <div class="card-body" style="background-color:white;width:100%;margin-top:30px;border-radius:5px;overflow-y:auto;max-height:300px">
=======
                <div class="card-body" style="background-color:white;width:100%;margin-top:30px;border-radius:5px; padding: 0px">
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28


                    @if ($records->isEmpty())
                    <div style="text-align: center">
                        <img style="width:10em" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
                    </div>
                    @else
                    <div class="table-responsive">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: rgb(2, 17, 79); color: white;">
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Assigned By</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Task Name</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Assigneed to</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Priority</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Due Date</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Subject</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Description</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Attch File</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            @if($record->status=="Completed")
                            <tr>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size:10px">#({{$record->emp_id}})</strong>
                                </td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->task_name }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->assignee }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->priority }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->due_date }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->subject }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ $record->description }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">
                                    @if ($record->file_path)
                                    <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;">View File</a>
                                    @else
                                    N/A
                                    @endif
                                </td>
<<<<<<< HEAD
                                <td style="padding: 5px; font-size: 12px; text-align: center">
                                    <div class="row" style="display: flex; justify-content: space-between;">
=======
                                <td style="padding: 5px; font-size: 12px; text-align: center; width: 100px;">
                                    <div class="m-0 row" style="display: flex; justify-content: space-between;">
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28
                                        <button wire:click="closeForTasks('{{$record->id}}')" style="background-color: green; color: white; border-radius: 5px;">Open</button>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
        </div>
                    @endif
                    @endif
                    @if($showDialog)
                    <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
<<<<<<< HEAD
                                <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                    <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Add Task</b></h5>
=======
                                <div class="modal-header" style="background-color: #02114F; height: 50px;">
                                    <h5 style="color: white; font-size: 18px;" class="modal-title"><b>Add
                                            Task</b></h5>
>>>>>>> 008114c9fc5e3a5fc140068680b773084dc89e28
                                    <button wire:click="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: white;">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="task-container">
                                        <!-- Task Name -->
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label for="task_name" style="font-size: 14px;">Task Name*</label>
                                            <br>
                                            <input type="text" wire:model="task_name" placeholder="Enter task name" style="width: 100%;font-size:12px">
                                        </div>
                                        @error('task_name') <span class="text-danger">{{ $message }}</span> @enderror

                                        <!-- Assignee -->
                                        <div class="form-group" style="margin-top: 20px;color:grey;font-size:12px">
                                            <label for="assignee" style="font-size: 14px;color:black">Assignee</label>
                                            <br>
                                            <i wire:click="forAssignee" class="fas fa-user icon" id="profile-icon"></i>
                                            @if($showRecipients)
                                            <strong style="font-size: 12;">Selected CC recipients:
                                            </strong>{{ implode(', ', array_unique($selectedPeopleNames)) }}
                                            @else
                                            Add Assignee
                                            @endif
                                        </div>
                                        @error('assignee') <span class="text-danger">{{ $message }}</span> @enderror
                                        @if($assigneeList)
                                        <div style="border-radius:5px;background-color:grey;padding:8px;width:220px;margin-top:10px">
                                            <div class="input-group" style="margin-bottom: 10px;">
                                                <input wire:model="searchTerm" style="font-size: 10px;cursor: pointer; border-radius: 5px 0 0 5px;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <button wire:click="filter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                                        <i style="text-align: center;" class="fa fa-search"></i>
                                                    </button>
                                                    <button wire:click="closeAssignee" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color: white; font-size: 24px;">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                            @if ($peopleData->isEmpty())
                                            <div class="container" style="text-align: center; color: white;font-size:12px"> No
                                                People Found
                                            </div>
                                            @else
                                            @foreach($peopleData as $people)
                                            <div wire:model="cc_to" wire:click="selectPerson('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 200px; border-radius: 5px;">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <input type="checkbox" wire:model="selectedPeople" value="{{ $people->emp_id }}">
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="username" style="font-size: 12px; color: white;">
                                                            {{ $people->first_name }} {{ $people->last_name }}
                                                        </h6>
                                                        <p class="mb-0" style="font-size: 12px; color: white;">
                                                            (#{{ $people->emp_id }})</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                        @endif
                                        <!-- Priority -->
                                        <div class="priority-container" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="priority" style="font-size: 14px; margin-left: 0px; margin-top: 0px; padding: 0 10px 0 0;">Priority*</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div id="priority" style="display: flex; align-items: center; margin-top: 0px;">
                                                        <div class="priority-option" style="margin-left: 0px; padding: 0;">
                                                            <input type="radio" id="low-priority" name="priority" wire:model="priority" value="low">
                                                            <span style="font-size: 14px; padding: 0;" class="text-xs">Low</span>
                                                        </div>
                                                        <div class="priority-option" style="margin-left: 20px; padding: 0;">
                                                            <input type="radio" id="medium-priority" name="priority" wire:model="priority" value="medium">
                                                            <span style="font-size: 14px; padding: 0;" class="text-xs">Medium</span>
                                                        </div>
                                                        <div class="priority-option" style="margin-left: 20px; padding: 0;">
                                                            <input type="radio" id="high-priority" name="priority" wire:model="priority" value="high">
                                                            <span style="font-size: 14px; padding: 0;" class="text-xs">High</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('priority') <span class="text-danger">{{ $message }}</span> @enderror
                                        <!-- Due Date -->
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label class="form-label" style="font-size: 14px;">Due Date</label>
                                            <br>
                                            <input type="date" wire:model="due_date" style="width: 100%;font-size:12px" max="<?= date('Y-m-d'); ?>">
                                        </div>
                                        @error('due_date') <span class="text-danger">{{ $message }}</span> @enderror

                                        <!-- Tags -->
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label for="tags" style="font-size: 14px;">Tags</label>
                                            <br>
                                            <input type="text" wire:model="tags" placeholder="Enter tags" style="width: 100%;font-size:12px">
                                        </div>
                                        @error('tags') <span class="text-danger">{{ $message }}</span> @enderror

                                        <div class="form-group" style="margin-top: 20px; color: grey; font-size: 12px">
                                            <label for="assignee" style="font-size: 14px; color: black">Followers</label>
                                            <br>
                                            <i wire:click="forFollowers" class="fas fa-user icon" id="profile-icon"></i>
                                            @if($showFollowers)
                                            <strong style="font-size: 12;">Selected Followers:
                                            </strong>{{ implode(', ', array_unique($selectedPeopleNamesForFollowers)) }}
                                            @else
                                            Add Followers
                                            @endif
                                        </div>


                                        @error('followers') <span class="text-danger">{{ $message }}</span> @enderror
                                        @if($followersList)
                                        <div style="border-radius:5px;background-color:grey;padding:8px;width:220px;margin-top:10px">
                                            <div class="input-group" style="margin-bottom: 10px;">
                                                <input wire:model="searchTerm" style="font-size: 10px;cursor: pointer; border-radius: 5px 0 0 5px;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <button wire:click="filter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                                        <i style="text-align: center;" class="fa fa-search"></i>
                                                    </button>
                                                    <button wire:click="closeFollowers" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color: white; font-size: 24px;">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                            @if ($peopleData->isEmpty())
                                            <div class="container" style="text-align: center; color: white;font-size:12px"> No
                                                People Found
                                            </div>
                                            @else
                                            @foreach($peopleData as $people)
                                            <div wire:model="cc_to" wire:click="selectPersonForFollowers('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 200px; border-radius: 5px;">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <input type="checkbox" wire:model="selectedPeopleForFollowers" value="{{ $people->emp_id }}">
                                                    </div>
                                                    <div class="col-auto">
                                                        <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="username" style="font-size: 12px; color: white;">
                                                            {{ $people->first_name }} {{ $people->last_name }}
                                                        </h6>
                                                        <p class="mb-0" style="font-size: 12px; color: white;">
                                                            (#{{ $people->emp_id }})</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                        @endif
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label for="Subject" style="font-size: 14px;">Subject</label>
                                            <br>
                                            <input wire:model="subject" placeholder="Enter Subject.." rows="4" style="width: 100%;font-size:12px"></input>
                                        </div>
                                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                        <!-- Description -->
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label for="description" style="font-size: 14px;">Description</label>
                                            <br>
                                            <textarea wire:model="description" placeholder="Add a description.." rows="4" style="width: 100%;font-size:12px"></textarea>
                                        </div>
                                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror

                                        <!-- File Input -->
                                        <div class="row">
                                            <div class="col">
                                                <label for="fileInput" style="cursor: pointer;font-size:14px">
                                                    <i class="fa fa-paperclip"></i> Attach Image
                                                </label>
                                            </div>
                                        </div>
                                        <input style="font-size: 12px;" wire:model="image" type="file" accept="image/*">
                                        @if ($image)
                                        <div>
                                            <img height="100" width="100" src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 300px;">
                                        </div>
                                        @endif
                                        @error('file_path') <span class="text-danger">{{ $message }}</span> @enderror
                                        <!-- <div style="margin-top: 30px; text-align: center;">
                                            <button wire:click="close" class="btn btn-danger btn-medium" type="button" name="link" style="background-color: #FF3D57; color: white; width: 100px;font-size:13px">Cancel</button>
                                            <button wire:click="submit" class="btn btn-success btn-medium" type="button" name="link" style="background-color: #4CAF50; color: white; margin-left: 20px;font-size:13px">Save
                                                Changes</button>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="close" class="btn btn-danger btn-medium" type="button" name="link" style="background-color: #FF3D57; color: white; width: 100px;font-size:13px">Cancel</button>
                                            <button wire:click="submit" class="btn btn-success btn-medium" type="button" name="link" style="background-color: #4CAF50; color: white; margin-left: 20px;font-size:13px">Save
                                                Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-backdrop fade show blurred-backdrop"></div>
                    @endif
                    </body>

    </html>
</div>
