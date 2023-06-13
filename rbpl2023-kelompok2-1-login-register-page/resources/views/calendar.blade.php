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
    <link rel="stylesheet" href="{{ asset('css/calendarTest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js"></script>

</head>

<body>

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
                            // alert("");
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
                                    center: 'month,agendaWeek,agendaDay',
                                    right: 'today prev,next'
                                },
                                events: [
                                    @foreach ( $events2 as $event)
                                    {
                                        title: "{{$event->ename}}",
                                        description: "{{$event->edesc}}",
                                        start: "{{$event->edate}}",
                                        // end: '2020-05-05',
                                        className: 'fc-bg-default',
                                        icon: "circle"
                                    },
                                    @endforeach
                                    // {
                                    //     title: 'Flight Paris',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-08-08T14:00:00',
                                    //     end: '2020-08-08T20:00:00',
                                    //     className: 'fc-bg-deepskyblue',
                                    //     icon: "cog",
                                    //     allDay: false
                                    // },
                                    // {
                                    //     title: 'Team Meeting',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-07-10T13:00:00',
                                    //     end: '2020-07-10T16:00:00',
                                    //     className: 'fc-bg-pinkred',
                                    //     icon: "group",
                                    //     allDay: false
                                    // },
                                    // {
                                    //     title: 'Meeting',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-08-12',
                                    //     className: 'fc-bg-lightgreen',
                                    //     icon: "suitcase"
                                    // },
                                    // {
                                    //     title: 'Conference',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-08-13',
                                    //     end: '2020-08-15',
                                    //     className: 'fc-bg-blue',
                                    //     icon: "calendar"
                                    // },
                                    // {
                                    //     title: 'Baby Shower',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-08-13',
                                    //     end: '2020-08-14',
                                    //     className: 'fc-bg-default',
                                    //     icon: "child"
                                    // },
                                    // {
                                    //     title: 'Birthday',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-09-13',
                                    //     end: '2020-09-14',
                                    //     className: 'fc-bg-default',
                                    //     icon: "birthday-cake"
                                    // },
                                    // {
                                    //     title: 'Restaurant',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-10-15T09:30:00',
                                    //     end: '2020-10-15T11:45:00',
                                    //     className: 'fc-bg-default',
                                    //     icon: "glass",
                                    //     allDay: false
                                    // },
                                    // {
                                    //     title: 'Dinner',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-11-15T20:00:00',
                                    //     end: '2020-11-15T22:30:00',
                                    //     className: 'fc-bg-default',
                                    //     icon: "cutlery",
                                    //     allDay: false
                                    // },
                                    // {
                                    //     title: 'Shooting',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-08-25',
                                    //     end: '2020-08-25',
                                    //     className: 'fc-bg-blue',
                                    //     icon: "camera"
                                    // },
                                    // {
                                    //     title: 'Go Space :)',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-12-27',
                                    //     end: '2020-12-27',
                                    //     className: 'fc-bg-default',
                                    //     icon: "rocket"
                                    // },
                                    // {
                                    //     title: 'Dentist',
                                    //     description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                                    //     start: '2020-12-29T11:30:00',
                                    //     end: '2020-12-29T012:30:00',
                                    //     className: 'fc-bg-blue',
                                    //     icon: "medkit",
                                    //     allDay: false
                                    // }
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
                </script>
                <div class="p-5">
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
                                <h4 class="modal-title"><span class="event-icon"></span><span
                                        class="event-title"></span></h4>
                                <div class="event-body"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="addEvent">
                    <a href="/"></a>
                </div>
                <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="add-event" action="/calendar/store" method="post">
                                @csrf
                                <div class="modal-body">
                                    <h4>Add Event Detail</h4>
                                    <div class="form-group">
                                        <label for="ename">Event name</label>
                                        <input type="text" class="form-control" name="ename" id="ename">
                                    </div>
                                    <div class="form-group">
                                        <label for="edate">Event Date</label>
                                        <input type='text' class="datetimepicker form-control" name="edate"
                                            id="edate">
                                    </div>
                                    <div class="form-group">
                                        <label for="edesc">Event Description</label>
                                        <textarea class="form-control" name="edesc" id="edesc"></textarea>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Event Color</label>
                                        <select class="form-control" name="ecolor">
                                            <option value="fc-bg-default">fc-bg-default</option>
                                            <option value="fc-bg-blue">fc-bg-blue</option>
                                            <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                                            <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                            <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                                        </select>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label>Event Icon</label>
                                        <select class="form-control" name="eicon">
                                            <option value="circle">circle</option>
                                            <option value="cog">cog</option>
                                            <option value="group">group</option>
                                            <option value="suitcase">suitcase</option>
                                            <option value="calendar">calendar</option>
                                        </select>
                                    </div> --}}
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Save">
                                    <button type="button" class="btn btn-primary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @yield('isi')
            </div>
        </div>
    </body>
    @yield('content')
</body>

</html>
