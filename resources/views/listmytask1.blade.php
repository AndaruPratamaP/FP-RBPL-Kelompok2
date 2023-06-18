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
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand px-1" href="#">
                    <img src="{{ asset('images/logo_studnest.png') }}" alt="StudNest" width="20%" height="20%"
                        class="d-inline-block align-text-top">
                    <b style="font-weight: 500">StudNest</b>
                </a>
                <div class="navbar-nav ms-auto pr-5">
                    <a>
                        <i class="fas fa-user mr-3"></i>
                        Nama
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="row mt-2">
        <div class="sidebar col-md-2">
            <nav class="nav nav-pills flex-column ml-4">
                <a class="nav-link mb-2" aria-current="page" href="#">
                    <i class="fa-solid fa-folder-open mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fas fa-file mr-3"></i>
                    SN Merger</a>
                <a class="choose nav-link mb-2" href="#">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Calendar</a>
                <a class="nav-link mr-2">
                    <i class="fa-sharp fa-solid fa-circle-notch mr-3"></i>
                    Trackgres</a>
                <a class="nav-link mb-2">
                </a>
                <a class="nav-link mb-2">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
                    Log Out</a>
            </nav>
        </div>
        <div class="content col-md-10 row-md-10">
            <br />
            <div class="container">
                <div class="row">
                    <div class="account-profile1">
                        <li style="list-style-type: none; border-radius: 6px; background-color: #8FC6FD; color:black">
                            <b>On-Going</b>
                        </li>
                        <li><a href="/addmytask" style="color: black">
                                <i class="fa-solid fa-circle-plus"></i>
                            </a></li>
                    </div>
                </div>
                <div class="row">
                    @foreach ($addtask as $t)
                        <div class="menu-label"
                            style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                            <div class="col-sm-10">
                                <li><a href="" style="color:black">{{ $t->TaskName }}</a></li>
                            </div>
                            <div class="col-sm-2">
                                <a href="" style="color:#FF0000">1 day</a>
                                <a href="" style="color:black; margin-left:3vw"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="menu-label"
                        style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                        <div class="col-sm-10">
                            <li><a href="" style="color:black">MPB Presentasi</a></li>
                        </div>
                        <div class="col-sm-2">
                            <a href="" style="color:#FF0000">3 day</a>
                            <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                    <div class="menu-label"
                        style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                        <div class="col-sm-10">
                            <li><a href="" style="color:black">Database</a></li>
                        </div>
                        <div class="col-sm-2">
                            <a href="" style="color:#12D248">7 day</a>
                            <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="account-profile1">
                        <li style="list-style-type: none; border-radius: 6px; background-color: #8FC6FD; color:black">
                            <b>To Do</b>

                        <li><a href="" style="color: black">
                                <i class="fa-solid fa-circle-plus"></i>
                            </a></li>
                    </div>
                </div>
                <div class="row">
                    <div class="menu-label"
                        style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                        <div class="col-sm-10">
                            <li><a href="" style="color:black">Quiz</a></li>
                        </div>
                        <div class="col-sm-2">
                            <a href="" style="color:#FF0000">3 day</a>
                            <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                    <div class="menu-label"
                        style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                        <div class="col-sm-10">
                            <li><a href="" style="color:black">Exercise</a></li>
                        </div>
                        <div class="col-sm-2">
                            <a href="" style="color:#12D248">7 day</a>
                            <a href="" style="color:black; margin-left:3vw"><i
                                    class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @yield('isi')
        </div>
    </div>
</body>

</html>
