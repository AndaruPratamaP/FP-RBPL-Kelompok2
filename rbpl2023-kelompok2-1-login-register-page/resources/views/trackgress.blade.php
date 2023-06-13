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

</head>

<body>
    <nav class="navbar navbar-expand-sm">
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
    <div class="row mt-1">
        <div class="sidebar position-sticky sidebar-sticky col-md-2">
            <nav class="nav nav-pills flex-column ml-4">
                <a class="choose nav-link mb-2" aria-current="page" href="/workspace/dashboard">
                    <i class="fa-solid fa-folder-open mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fas fa-file mr-3"></i>
                    SN Merger</a>
                <a class="nav-link mb-2" href="#">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Calendar</a>
                <a class="nav-link mr-2" href="#">
                    <i class="fa-sharp fa-solid fa-circle-notch mr-3"></i>
                    Trackgres</a>
                <a class="nav-link mb-2">
                </a>
                <a class="nav-link mb-2">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
                    Log Out</a>
            </nav>
        </div>
        <div class="content col-md-10">
            @foreach ($workspace as $w)
                <div class="container"
                    style="margin-top:20px; width:1200px; height:100px; display:flex;">


                </div>
                    {{-- <div class="row">
                    <div class="col">
                        <h1 >{{ $w->Name }}</h1>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <h4 >{{ $w->Description }}</h4>
                    </div>
                </div>
            </div> --}}
            @endforeach
            <x-trackgress-component />
        </div>
    </div>
</body>

</html>
