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

</head>

<body>
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
            <nav class="sidenav nav nav-pills flex-column ml-4">
                <a class="nav-link mb-2" aria-current="page" href="/listmytask/{userid}">
                    <i class="fa-solid fa-list-check mr-3"></i>
                    My Task</a>
                <a class="nav-link mb-2" href="/dashboardworkspace/{userid}">
                    <i class="fa-solid fa-file-lines mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="/isiforum">
                    <i class="fa-solid fa-users mr-3"></i>
                    Forum</a>
                <a class="choose nav-link mb-2" href="/history/{userid}">
                    <i class="fa-regular fa-square-check mr-3"></i>
                    History</a>
                <a class="nav-link mb-2">
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
            </nav>
            @yield('sidebar')
        </div>
        <div class="content col-md-10">
            <div class="done col-md-1 mt-4 ml-4" style="background-color: #8FC6FD; border-radius:5px;">
                <p style="font-weight:800">
                    Done
                </p>
            </div>
            @foreach ($donetask as $d)
                <div class="taskdone col-md-11 ml-4" style="background-color: white; border-radius:30px;">
                    <p class="pt-3 pb-3"> {{ $d->taskname }} <a href="#" style="color:black; margin-left:30px" data-toggle="modal"
                        data-target="#myModal"><i class="fa-solid fa-caret-right mr-3 mt-1"
                            style="float: right; color:#8FC6FD;"></i></a></p>
                </div>
            @endforeach
            {{-- <div class="taskdone col-md-11 ml-4" style="background-color: white; border-radius:30px;">
                <p class="pt-3 pb-3"> Dynaform ProcessMaker <i class="fa-solid fa-caret-right mr-3 mt-1"
                        style="float: right; color:#8FC6FD;"></i></p>
            </div>
            <div class="taskdone col-md-11 ml-4" style="background-color: white; border-radius:30px;">
                <p class="pt-3 pb-3"> Use Case APERTA <i class="fa-solid fa-caret-right mr-3 mt-1"
                        style="float: right; color:#8FC6FD;"></i></p>
            </div>
            <div class="taskdone col-md-11 ml-4" style="background-color: white; border-radius:30px;">
                <p class="pt-3 pb-3"> Belakang PKM <i class="fa-solid fa-caret-right mr-3 mt-1" style="float: right;color:#8FC6FD"></i></p>
            </div> --}}
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                            @foreach ($donetask as $d)
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="taskname" name="taskname">{{ $d->taskname }}</h4>

                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p id="taskdescription" name="taskdescription">{{ $d->taskdescription }}</p>
                                </div>
                            @endforeach
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        @yield('isi')
    </div>
</body>

</html>
