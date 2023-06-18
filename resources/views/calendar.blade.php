<!DOCTYPE html>
<html>


<head>
    <title></title>
    {{-- <link rel="stylesheet" href="{{ asset('css/templateHome.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/templateHome.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/calendarTest.css') }}">
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
    <script src="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js"></script>


    <style>
        body {
            background: linear-gradient(to top right, #A4C5FD4D, #8FC6FD4D, #E0C4FD4D);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            /* margin: 0; */
        }

        .row {
            height: 91vh;
        }

        .navbar-brand {
            font-size: 100%;
            color: black;
        }

        .sidenav {
            position: fixed;
            overflow: auto;
        }

        .nav-link {
            color: #858585;
        }

        .choose {
            background-color: white;
            color: #5CA9FF;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.6);
            height: max-content;
            min-height: 100%;
            border-radius: 30px 0px 0px 0px;
        }

        /* .custom-modal {
    max-width: 500px;
    height: 10px;
} */
        .reminder {
            /* Rectangle 1199 */



            width: 553px;
            height: 250x;
            /* left: 555px;
top: 333.67px; */

            background: linear-gradient(282.98deg, #E0C4FD 0%, #A4C5FD 100%);
            box-shadow: 6px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 60px;
        }
    </style>
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
                <a class="nav-link mb-2" aria-current="page" href="/dashboardworkspace/{userid}">
                    <i class="fa-solid fa-folder-open mr-3"></i>
                    Workspace</a>
                <a class="nav-link mb-2" href="/merger">
                    <i class="fas fa-file mr-3"></i>
                    SN Merger</a>
                <a class="choose nav-link mb-2" href="/calendar">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    Calendar</a>
                </a>
                <a href="{{route('logout')}}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link mb-2">
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

            <script>
                jQuery(document).ready(function() {
                    jQuery('.datetimepicker').datepicker({
                        timepicker: true,
                        language: 'en',
                        range: true,
                        multipleDates: true,
                        multipleDatesSeparator: " - "
                    });
                    jQuery("#add-event").submit(function() {
                        // alert("Submitted");
                        var values = {};
                        $.each($('#add-event').serializeArray(), function(i, field) {
                            values[field.name] = field.value;
                        });
                        console.log(
                            values
                        );
                    });
                });

                (function() {
                    'use strict';
                    // ------------------------------------------------------- //
                    // Calendar
                    // ------------------------------------------------------ //
                    jQuery(function() {
                        // page is ready
                        jQuery('#calendar').fullCalendar({
                            themeSystem: 'bootstrap4',
                            // emphasizes business hours
                            businessHours: false,
                            defaultView: 'month',
                            // event dragging & resizing
                            editable: true,
                            // header
                            header: {
                                left: 'title',
                                // center: 'month',
                                right: 'today prev,next'
                            },
                            events: [
                                @foreach ($events2 as $event)
                                    {
                                        title: "{{ $event->ename }}",
                                        description: "{{ $event->edesc }}",
                                        start: "{{ $event->edate }}",
                                        // end: '2020-05-05',
                                        className: 'fc-bg-default',
                                        icon: "circle"
                                    },
                                @endforeach
                            ],
                            eventRender: function(event, element) {
                                if (event.icon) {
                                    element.find(".fc-title").prepend("<i class='fa fa-" + event.icon +
                                        "'></i>");
                                }
                            },
                            dayClick: function() {
                                jQuery('#modal-view-event-add').modal();
                            },
                            eventClick: function(event, jsEvent, view) {
                                jQuery('.event-icon').html("<i class='fa fa-" + event.icon + "'></i>");
                                jQuery('.event-title').html(event.title);
                                jQuery('.event-body').html(event.description);
                                jQuery('.eventUrl').attr('href', event.url);
                                jQuery('#modal-view-event').modal();
                            },
                        })
                    });

                })(jQuery);
                // Mendapatkan tanggal target dari PHP menggunakan sintaks PHP
            </script>

            <div class="p-5">
                <h2 class="mb-4">Calendar</h2>
                <div class="card">
                    <div class="card-body p-0">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>

            <!-- calendar modal -->
            <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span>
                            </h4>
                            <div class="event-body"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                <a href="/FormTask"></a>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form id="add-event" action="/calendar/store" method="post">
                            @csrf
                            <div class="modal-body">
                                <h4>Add Event Detail</h4>
                                <div class="form-group">
                                    <label>Event name</label>
                                    <input type="text" class="form-control" name="ename">
                                </div>
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input type='text' class="form-control" name="edate">
                                </div>
                                <div class="form-group">
                                    <label>Event Description</label>
                                    <textarea class="form-control" name="edesc"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="popupModal" class="modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered custom-modal" role="document">
                    <div class="reminder modal-content" style="border-radius: 30px;">
                        <div  class="mt-4" style="text-align: center;">
                            <i class="fa-solid fa-bell fa-2xl" style="color: #000000;"></i>
                        </div>
                        <div style="text-align: center;">

                            <b style="font-size: 30px;">REMINDER</b>
                            <p id="eventReminderText" style="font-size: 20px;"></p>

                        </div>
                        <div class="mr-4 mb-2 d-flex flex-row-reverse">
                            <button type="button" class="btn d-flex btn-secondary" data-dismiss="modal"
                                style="width: 70px; border-radius:30px; background-color: white; border-color:white; color:black; align-items:center; justify-content:center;"><b>Oke</b></button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                @foreach ($events2 as $index => $event1)
                    var targetDate = new Date('{{ $event1->edate }}');

                    // Menghitung selisih waktu antara tanggal target dan tanggal saat ini
                    var timeDifference = targetDate.getTime() - Date.now();

                    // Menghitung jumlah hari yang tersisa
                    var daysRemaining = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

                    // Memeriksa apakah tersisa 3 hari menuju tanggal target
                    if (daysRemaining === 5) {
                        // Menampilkan pop-up reminder
                        var modal = document.getElementById("popupModal");
                        modal.style.display = "block";
                        var closeButton = document.querySelector("#popupModal .btn-secondary");
                        closeButton.addEventListener("click", function() {
                            modal.style.display = "none";
                        });

                        // Mengatur teks pesan reminder
                        var eventReminderText = document.getElementById("eventReminderText");
                        eventReminderText.textContent = "Only 5 days left until " + '{{ $event1->ename }}' + "!";
                    }
                @endforeach
            </script>




            {{-- <div class="popupModal fade" id="popupModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="reminder modal-content" style="border-radius: 30px;">
                        <div class="d-flex justify-content-center">
                            <div class="elipse d-flex justify-content-center mt-2" style="text-align: center;">
                                <i class="bell fa-solid fa-bell fa-4x mt-2"
                                    style="color: #E0C4FD; width:1000px; height:1000px;"></i>
                            </div>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <b style="font-size: 30px;">REMINDER</b>
                            <p style="font-size: 20px;">FP RKPL Tersisa 5 Hari Lagi!</p>
                        </div>
                        <div class="mr-4 mb-2 d-flex flex-row-reverse">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                style="width: 70px; border-radius:30px; background-color: white; border-color:white; color:black;"><b>Oke</b></button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

</body>

</html>
