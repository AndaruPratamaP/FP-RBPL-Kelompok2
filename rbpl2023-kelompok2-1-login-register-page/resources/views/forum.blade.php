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
    <link href="{{ asset('css/forum.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/templatehome.css') }}">

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
                        Nama
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
                <a class="nav-link mb-2" aria-current="page" href="#">
                    <i class="fa-solid fa-list-check mr-3"></i>
                    My Task</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fa-solid fa-file-lines mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fa-solid fa-users mr-3"></i>
                    Forum</a>
                <a class="choose nav-link mb-2">
                    <i class="fa-regular fa-square-check mr-3"></i>
                    History</a>
                <a class="nav-link mb-2">
                </a>
                <a class="nav-link mb-2">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
                    Log Out</a>
            </nav>
        </div>
        <div class="content col-md-10">
            <div class="title">
                <p>FORUM WORKSPACE</p>
            </div>
            <div class="list">
                <p>FP RKPL</p>
            </div>
            <button class='tambahWS'>Tambah Workspace</button>
            @yield('isi')
        </div>
    </div>
    @yield('content')
</body>

</html>
