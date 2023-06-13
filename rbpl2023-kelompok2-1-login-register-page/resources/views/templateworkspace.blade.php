<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
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


<body class="background">
    <div class="white">

        <div class="row">
            <div class="header">
                <div class="wrapper-1">
                    <div class="logo">
                            <img src="{{ asset ('images/logo_studnest.png') }}" alt="StudNest">
                        <h2>StudNest</h2>
                    </div>
                    <ul class="account-profile">
                        <li><a>
                                <i class="fas fa-user"></i>
                            </a></li>
                        @if (Auth::check())
                        <li><a>{{ Auth::user()->username }}</a></li> <!-- ini harusnya nyambung ke database login tp aku gatau caranya!-->
                        @endif

                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="wrapper-2">
                <div class="sidebar">
                    <ul class="sidebar-menu">
                        <div class="menu-label">
                            <i class="fa-solid fa-folder-open"></i>
                            <li><a href="">Workspace</a></li>
                        </div>

                        <div class="menu-label">
                            <i class="fas fa-file"></i>
                            <li><a href="">SN Merger</a></li>
                        </div>

                        <div class="menu-label" style="list-style-type: none; border-radius: 6px; background-color: rgba(255,255,255,0.8);">
                            <i class="fas fa-calendar-alt"></i>
                            <li><a href="" style="text-decoration: none; color: #29343E">Calendar</a></li>
                        </div>

                        <div class="menu-label">
                            <i class="fa-sharp fa-solid fa-circle-notch"></i>
                            <li><a href="">Trackgres</a></li>
                        </div>
                        <div class="menu-label">
                            <i class="fa-sharp fa-solid fa-circle-notch"></i>

                            <li>
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </div>
                        <div class="menu-label">
                            <x-timer-component />
                        </div>
                    </ul>
                    <div class="sidebar-timer">

                    </div>
                    <ul class="sidebar-members">
                        <a style="font-size: 20px; font-weight: 500; padding-left: 2rem;">Team Members</a>
                        <br><br>
                        <div class="members-label">
                            <li><a>
                                    <i class="fas fa-user"></i>
                                </a></li>
                            <li><a>Nama</a></li> <!-- ini harusnya nyambung ke database login tp aku gatau caranya!-->
                        </div>
                        <div class="members-label">
                            <li><a>
                                    <i class="fas fa-user"></i>
                                </a></li>
                            <li><a>Nama</a></li> <!-- ini harusnya nyambung ke database login tp aku gatau caranya!-->
                        </div>
                        <div class="members-label">
                            <li><a>
                                    <i class="fas fa-user"></i>
                                </a></li>
                            <li><a>Nama</a></li> <!-- ini harusnya nyambung ke database login tp aku gatau caranya!-->
                        </div>
                    </ul>
                </div>
                <div class="display-area">
                    @yield('displayarea')
                </div>
            </div>
        </div>

    </div>
</body>

</html>
