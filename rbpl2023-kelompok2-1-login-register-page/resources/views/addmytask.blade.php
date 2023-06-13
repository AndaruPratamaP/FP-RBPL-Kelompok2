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
    <link href="{{ asset('css/mytask.css') }}" rel="stylesheet">
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
            <nav class="sidenav nav nav-pills flex-column ml-4">
                <a class="choose nav-link mb-2" aria-current="page" href="#">
                    <i class="fa-solid fa-list-check mr-3"></i>
                    My Task</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fa-solid fa-file-lines mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fa-solid fa-users mr-3"></i>
                    Forum</a>
                <a class="nav-link mb-2">
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
            <div class="container" style="padding-bottom: 7px">
                <div class="jumbotron rounded shadow-sm">
                    <a class="btn btn-sm" style="border-radius: 32px; color:#589BFF" href="/listmytask"><i
                            class="fa-solid fa-angle-left" style="margin-right: 0.5vw; "></i>Back</a>
                    <form action="/addmytask/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row mt-3" style="color: #363433">
                            <label for="TaskName"><b>Task Name</b></label>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" name="TaskName" required="required"
                                id="TaskName" placeholder="Enter your task name">
                        </div>
                        <div class="form-group row mt-2" style="color: #363433">
                            <label for="TaskDescription"><b>Task Description</b></label>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" name="TaskDescription" required="required"
                                id="TaskDescription" placeholder="Enter your task details">
                        </div>
                        <div class="form-group row mt-2" style="color: #363433">
                            <label for="Deadline"><b>Deadline</b></label>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control" name="Deadline" required="required"
                                id="Deadline" placeholder="DD/MM/YYYY">
                        </div>
                        <input type="submit" class="btn-lg shadow"
                            style="border-radius: 32px; color:#FFFFFF; margin-top:1.5vw; margin-left:10vw"
                            value="Create new task reminder">
                    </form>
                </div>
            </div>
            @yield('isi')
        </div>
    </div>
</body>

</html>
