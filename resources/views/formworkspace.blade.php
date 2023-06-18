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
    <link href="{{ asset('css/formworkspace.css') }}" rel="stylesheet">
    <link href="{{ asset('css/workspace.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
                <a class="choose nav-link mb-2" aria-current="page" href="/dashboardworkspace/{userid}">
                    <i class="fa-solid fa-folder-open mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="/merger">
                    <i class="fas fa-file mr-3"></i>
                    SN Merger</a>
                <a class="nav-link mb-2" href="/calendar">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Calendar</a>
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
        </div>
        <div class="content col-md-10">
            <div class="form-box">
                <div class="flex-column mt-5">
                    <div class="container">
                        <a href="/dashboardworkspace/{userid}" class="ml-4 mb-5" id="back-button" role="button">Back</a>
                    </div>
                </div>
                <div class="flex-column m-1">
                    <div class="container">
                        <form action="/workspace/form/store" method="post">
                            {{ csrf_field() }}
                            <div class="form-group m-4">
                                <label for="ws_name" id="input-title">Workspace name:</label>
                                <input type="ws_name" class="form-control" id="Name"
                                    placeholder="Enter your workspace name" name="Name" required aria-required="true"
                                    required="required">
                            </div>
                            <div class="form-group m-4">
                                <label for="ws_desc" id="input-title">Description:</label>
                                <input type="ws_desc" class="form-control" id="Description"
                                    placeholder="Enter your workspace description" name="Description" required
                                    aria-required="true" required="required">
                            </div>
                            <div class="felx-row d-flex justify-content-between">
                                <div class="form-group m-4">
                                    <label for="ws_deadline" id="input-title">Deadline:</label>
                                    <input type="date" class="form-control" id="Deadline" placeholder="DD/MM/YY"
                                        name="Deadline" required aria-required="true" required="required">
                                </div>
                                <div class="form-group m-4">
                                    <label for="ws_members" id="input-title">Members:</label>
                                    <input type="ws_members" class="form-control" id="Member" placeholder="Username"
                                        name="Member" required aria-required="true" required="required">
                                </div>
                            </div>
                            @if (Auth::check())
                                <input style="display:none;" type="text" class="hidden" name="userid"
                                    required="required" id="userid" value="{{ Auth::user()->id }}">
                            @endif
                            <div class="flex-column" id="submit">
                                <input type="submit" class="submit-button" value="Create new workspace">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
