<!DOCTYPE html>
<html>


<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link href="{{ asset('css/master.css') }}" rel="stylesheet"> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="{{ asset('vendor/event/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/event/js/parsley.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/templateHome.css') }}">
    <link href="{{ asset('css/workspace.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .progress-bar {
            height: 10px;
            background-color: #ccc;
            border: 1px solid #000;
            box-sizing: border-box;
        }
    </style>

</head>

<body style="overflow-x:hidden; overflow-y:hidden">
    <header>
        <nav class="navbar navbar-expand-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand px-1" href="#">
                    <img src="{{ asset('images/logo_studnest.png') }}" alt="StudNest" width="20%" height="20%"
                        class="d-inline-block align-text-top">
                    <b>StudNest</b>
                </a>
                <div class="navbar-nav ms-auto pr-5">
                    <a>
                        <i class="fas fa-user mr-3"></i>
                        @if (Auth::check())
                            <li><a>{{ Auth::user()->username }}</a></li>
                        @endif
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <div class="row mt-1">
        <div class="sidebar position-sticky sidebar-sticky col-md-2">
            <nav class="nav nav-pills flex-column ml-4">
                <a class="choose nav-link mb-2" aria-current="page" href="/dashboardworkspace/{userid}">
                    <i class="fa-solid fa-folder-open mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="/merger">
                    <i class="fas fa-file mr-3"></i>
                    SN Merger</a>
                <a class="nav-link mb-2" href="/calendar">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Calendar</a>
                </a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                    class="nav-link mb-2">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
                    Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <div class="nav-link mb-2">
                    <x-timer-component />
                </div>
            </nav>
        </div>
        <div class="content col-md-10">
            {{-- <script>
                $(document).ready(function() {
                    // Get the checkbox element
                    var checkbox = $('#myCheckbox');

                    // Attach event listener
                    checkbox.on('change', function() {
                        // Check if the checkbox is checked
                        if (checkbox.is(':checked')) {
                            // Make a POST request
                            $.ajax({
                                url: '/workspace/task/done/store',
                                type: 'POST',
                                data: {
                                    checked: true
                                },
                                success: function(response) {
                                    // Handle the response
                                    console.log('POST request sent successfully');
                                },
                                error: function(xhr, status, error) {
                                    // Handle errors
                                    console.error('Error sending POST request:', error);
                                }
                            });
                        } else {
                            // Checkbox is unchecked
                            // You can also send a POST request when the checkbox is unchecked if needed
                        }
                    });
                });
            </script> --}}
            <div class="container mt-5">
                @foreach ($workspace as $w)
                    {{-- JUDUL WORKSPACE --}}
                    <div class="flex-column">
                        @php
                            $workspaces = DB::table('workspaces')
                                ->select('workspaces.*')
                                ->where('workspaces.id', '=', $w->id)
                                ->get();
                        @endphp
                        @foreach ($workspaces as $work)
                            {{-- INI SALAH HARSUNYA NYAMBUNG KE ID TOLONG BENERIN MAKASEY --}}
                            <label class="title"> {{ $work->Name }}
                            </label>
                    </div>
                    {{-- DESKRIPSI WORKSPACE --}}
                    <div class="flex-column mt-2">
                        <div class="subtitle mb-2">Deskripsi</div>
                        <p class="desc"> {{ $work->Description }} </p>
                    </div>
                @endforeach
                @endforeach
                <div class="flex-column">
                    <div class="flex-row d-flex">
                        {{-- TASKS --}}
                        <div class="container pl-0">
                            <div class="flex-column">
                                <div class="subtitle">Tasks<a href="task/form"><i class="fa-solid fa-circle-plus ml-2"
                                            style="color: #7C7F89"></i></a></div>
                                @php
                                    $completedTasks = 0;
                                @endphp
                                @foreach ($taskworkspace as $tw)
                                    <div class="flex-row d-flex taskLabel mt-2 mb-2 p-2">
                                        <div class="container flex-grow-1">
                                            <label class="m-0"
                                                for="task-{{ $tw->id }}">{{ $tw->Name }}</label>
                                        </div>
                                        <div class="container" id="check-area">
                                            <input type="checkbox" class="task-checkbox" id="task-{{ $tw->id }}"
                                                name="done[]" data-task-id="{{ $tw->id }}"
                                                {{ $tw->IsDone ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                    @if ($tw->IsDone)
                                        @php
                                            $completedTasks++;
                                        @endphp
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        {{-- MEMBERS, STATUS, TIME --}}
                        <div class="container pr-0">
                            <div class="box mt-4 pb-3">
                                <div class="flex-row d-flex justify-content-start">
                                    <div class="">
                                        <div class="flex-column ml-4 pt-3 pb-2">
                                            <div class="mr-3">Members</div>
                                        </div>
                                        {{-- <div class="flex-column ml-4 pt-2 pb-2">
                                            <div>Status</div>
                                        </div> --}}
                                        <div class="flex-column ml-4 pt-2 pb-3">
                                            <div>Time</div>
                                        </div>
                                    </div>
                                    @foreach ($workspace as $w)
                                        {{-- @php
                                            $data = workspace::join('taskworkspace', 'workspace.id', '=', 'taskworkspace.workspace_id')
                                                ->select('workspace.Member', 'taskworkspace.Member')
                                                ->select('workspace.Deadline', 'taskworkspace.Deadline')
                                                ->get();
                                        @endphp --}}
                                        {{-- @foreach ($data as $datas) --}}
                                            <div class="container">
                                                <div class="flex-column ml-4 pt-3 pb-2">
                                                    {{-- yg nama ini di gui seharusnya foto biar gampang pake nama member aja --}}
                                                    <div>{{ $w->Member }}</div>
                                                </div>
                                                {{-- <div class="flex-column ml-4 pt-2 pb-2">
                                                    <div class="flex-row d-flex">
                                                        <div>Finished</div>
                                                        <div class="status-box ml-2">100%</div>
                                                    </div>
                                                </div> --}}
                                                <div class="flex-column ml-4 pt-2 pb-3">
                                                    <div> <i class="fa-regular fa-clock mr-2"
                                                            style="color: #589BFF;"></i>{{ round((strtotime($w->Deadline) - time()) / (60 * 60 * 24)) }}
                                                        day
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- @endforeach --}}
                                    @endforeach
                                </div>
                                <div
                                    style="margin-top: 15px; display:flex; align-items:center; justify-content:center;">
                                    <div id="lingkaran-trackgress"
                                        style="width:380px; height:380px; position:relative;">
                                        <div
                                            style="width:380px; height:380px; border-radius:50%; padding:30px;
                                                    box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15), -6px -6px 10px -1px rgba(255,255,255,0.5)">
                                            <div
                                                style="width:320px; height:320px; border-radius:50%; display:flex; align-items:center; justify-content:center;
                                                    box-shadow:inset 4px 4px 6px -1px rgba(0,0,0,0.2), inset -4px -4px 6px -1px rgba(255,255,255,0.5),
                                                               -0.5px -0.5px 0px rgba(255,255,255,0.5), 0.5px 0.5px 0px rgba(0,0,0,0.03),
                                                               0px 12px 10px -10px rgba(0,0,0,0.05)">

                                                <div id="progressText" style="font-weight:900; font-size:4rem">
                                                    50%
                                                </div>
                                            </div>
                                        </div>
                                        <svg id="progressSVG"
                                            style="position: absolute; top:0; left:0; transform:rotate(270deg)"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1" width="380px"
                                            height="380px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                    <stop offset="0%" stop-color="#94C6FE" />
                                                    <stop offset="100%" stop-color="#E0C4FE" />
                                                </linearGradient>
                                            </defs>
                                            <circle id="progressCircle"
                                                style="fill:none; stroke:url(#GradientColor); stroke-width:30px; stroke-dasharray:1065; stroke-dashoffset: 0"
                                                cx="190" cy="190" r="174.85"
                                                stroke-linecap="round" />

                                        </svg>
                                    </div>
                                    <script>
                                        var checkboxes = document.querySelectorAll('.task-checkbox');
                                        var progressText = document.getElementById('progressText');
                                        var progressCircle = document.getElementById('progressCircle');
                                        var displayCircle = document.getElementById('lingkaran-trackgress');

                                        function updateProgressBar() {
                                            var completedTasks = 0;
                                            var checkedTaskIds = [];


                                            for (var i = 0; i < checkboxes.length; i++) {
                                                if (checkboxes[i].checked) {
                                                    completedTasks++;
                                                    checkedTaskIds.push(checkboxes[i].dataset.taskId);

                                                }
                                            }


                                            var percentage = (completedTasks / checkboxes.length) * 100;
                                            progressText.textContent = percentage.toFixed(0) + '%';
                                            progressCircle.style.strokeDashoffset = (-1065 + (percentage * 10.65)).toFixed(2);
                                            if (percentage === 100) {
                                                progressCircle.style.strokeDashoffset = 0;
                                            }
                                            localStorage.setItem('completedTasks', completedTasks);
                                            localStorage.setItem('checkedTaskIds', JSON.stringify(checkedTaskIds));


                                        }

                                        if (checkboxes.length === 0) {
                                            progressCircle.style.display = 'none';
                                            progressText.style.display = 'none';
                                            displayCircle.style.display = 'none';
                                        } else {
                                            progressCircle.style.display = 'block';
                                            progressText.style.display = 'block';
                                            displayCircle.style.display = 'block';
                                        }


                                        for (var i = 0; i < checkboxes.length; i++) {
                                            checkboxes[i].addEventListener('change', updateProgressBar);
                                        }

                                        var storedCompletedTasks = localStorage.getItem('completedTasks');
                                        var storedCheckedTaskIds = localStorage.getItem('checkedTaskIds');
                                        var completedTasks = 0;

                                        if (storedCompletedTasks !== null && !isNaN(storedCompletedTasks)) {
                                            completedTasks = parseInt(storedCompletedTasks);
                                        }

                                        var checkedTaskIds = [];

                                        if (storedCheckedTaskIds !== null) {
                                            checkedTaskIds = JSON.parse(storedCheckedTaskIds);
                                        }

                                        // Mengatur status awal checkbox berdasarkan nilai yang disimpan di local storage
                                        for (var i = 0; i < checkboxes.length; i++) {
                                            checkboxes[i].checked = checkedTaskIds.includes(checkboxes[i].dataset.taskId);
                                        }




                                        // Panggil fungsi updateProgressBar saat halaman dimuat
                                        updateProgressBar();
                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
