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
                <a class="nav-link mr-2" href="{{ route('trackgress') }}">
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
                        {{-- INI SALAH HARSUNYA NYAMBUNG KE ID TOLONG BENERIN MAKASEY --}}
                        <label class="title"> {{ $w->Name }}
                        </label>
                    </div>
                    {{-- DESKRIPSI WORKSPACE --}}
                    <div class="flex-column mt-2">
                        <div class="subtitle mb-2">Deskripsi</div>
                        <p class="desc"> {{ $w->Description }} </p>
                    </div>
                @endforeach
                <div class="flex-column">
                    <div class="flex-row d-flex">
                        {{-- TASKS --}}
                        <div class="container pl-0">
                            <div class="flex-column">
                                <form method="post" action="workspace/task/done/store">
                                    @csrf
                                    <div class="subtitle">Tasks<a href="task/form"><i
                                                class="fa-solid fa-circle-plus ml-2" style="color: #7C7F89"></i></a>
                                    </div>
                                    @foreach ($taskworkspace as $tw)
                                        <div class="flex-row d-flex taskLabel mt-2 mb-2 p-2">
                                            <div class="container flex-grow-1">
                                                <label class=" m-0" for="1"> {{ $tw->Name }} </label>
                                            </div>
                                            <div class="container" id="check-area">
                                                <input type="checkbox" class="" id="mycheckbox" name="done[]">
                                            </div>
                                        </div>
                                    @endforeach
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        {{-- MEMBERS, STATUS, TIME --}}
                        <div class="container pr-0">
                            <div class="box mt-4">
                                <div class="flex-row d-flex justify-content-start">
                                    <div class="">
                                        <div class="flex-column ml-4 pt-3 pb-2">
                                            <div class="mr-3">Members</div>
                                        </div>
                                        <div class="flex-column ml-4 pt-2 pb-2">
                                            <div>Status</div>
                                        </div>
                                        <div class="flex-column ml-4 pt-2 pb-3">
                                            <div>Time</div>
                                        </div>
                                    </div>
                                    @foreach ($workspace as $w)
                                        <div class="container">
                                            <div class="flex-column ml-4 pt-3 pb-2">
                                                {{-- yg nama ini di gui seharusnya foto biar gampang pake nama member aja --}}
                                                <div>nama nama nama</div>
                                            </div>
                                            <div class="flex-column ml-4 pt-2 pb-2">
                                                <div class="flex-row d-flex">
                                                    <div>Finished</div>
                                                    <div class="status-box ml-2">100%</div>
                                                </div>
                                            </div>
                                            <div class="flex-column ml-4 pt-2 pb-3">
                                                <div> <i class="fa-regular fa-clock mr-2"
                                                        style="color: #589BFF;"></i>{{ round((strtotime($w->Deadline) - time()) / (60 * 60 * 24)) }}
                                                    day
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
