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
    <link rel="stylesheet" href="{{ asset('css/templateHome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forum2.css') }}">
    <script>
        function validasi() {
            var input = document.getElementById('reply');
            var submit = document.getElementById('send');
            if (input.style.display === 'none') {
                input.style.display = 'block';
                submit.style.display = 'block';
            } else {
                input.style.display = 'none';
                submit.style.display = 'none';
            }
        };
    </script>
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
                    <a name="account" id="account">
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
                <a class="choose nav-link mb-2" href="/isiforum">
                    <i class="fa-solid fa-users mr-3"></i>
                    Forum</a>
                <a class="nav-link mb-2" href="/history/{userid}">
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
        </div>
        <div class="content col-md-10">
            <div class="title-list" style="font-weight: 900; font-size: 25; padding-left: 2%; padding-top: 2%">
                <a>FORUM</a>
            </div>
            {{-- <div class="comment">
                <br>
                <a style="padding-left:5%">
                    <i class="fas fa-user mr-3"></i>
                    Nama
                </a>
                <a style="font-style: italic">
                    posted at <time datetime="YYYY-MM-DDThh:mm">YYYY-MM-DD hh:mm</time>
                </a>
                <p class="bubble-comment">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
            </div> --}}
            {{-- <button class="reply-button">Reply</button> --}}
            {{-- <div class="comment-reply">
                <a style="padding-left:7.5%">
                    <i class="fas fa-user mr-3"></i>
                    Nama
                </a>
                <a style="font-style: italic">
                    posted at <time datetime="YYYY-MM-DDThh:mm">YYYY-MM-DD hh:mm</time>
                </a>
                <p class="bubble-reply">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
            </div> --}}
            {{-- <div class="comment">
                <br>
                <a style="padding-left:5%">
                    <i class="fas fa-user mr-3"></i>
                    Nama
                </a>
                <a style="font-style: italic">
                    posted at <time datetime="YYYY-MM-DDThh:mm">YYYY-MM-DD hh:mm</time>
                </a>
                <p class="bubble-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestiae
                    magnam in sed similique ut impedit dolorem doloremque eius aliquid sit repudiandae, hic,
                    blanditiis id amet nam maiores cumque ipsum.
                </p>
            </div> --}}
            {{-- <button class="reply-button" id="showInputButton" onclick="validasi();">Reply</button> --}}

            @foreach ($postforum as $forum)
                <div class="comment">
                    <br>
                    <a style="padding-left:5%">
                        <i class="fas fa-user mr-3"></i>
                        @if (Auth::check())
                        <a>{{ Auth::user()->username }}</a>
                        @endif
                    </a>
                    <a style="font-style: italic">
                        posted at <time datetime="YYYY-MM-DDThh:mm">{{ date('Y/m/d') }}</time>
                    </a>
                    <p class="bubble-comment">{{ $forum->post }}
                    </p>
                </div>
                <button class="reply-button" id="showInputButton" onclick="validasi();">Reply</button>
            @endforeach
            @foreach ($replycomment as $reply)
                <div class="comment-reply">
                    <a style="padding-left:7.5%">
                        <i class="fas fa-user mr-3"></i>
                        @if (Auth::check())
                        <a>{{ Auth::user()->username }}</a>
                        @endif
                    </a>
                    <a style="font-style: italic">
                        posted at <time datetime="YYYY-MM-DDThh:mm">{{ date('Y/m/d') }}</time>
                    </a>
                    <p class="bubble-reply">
                        {{ $reply->reply }}
                    </p>
                </div>
            @endforeach
            <div>
                <form action="/isiforum/store2" method="post">
                    @csrf
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="reply" id="reply" placeholder="Type Here"
                            style="display:none">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary" type="submit" id="send"
                            style="display: none">Send</button>
                    </div>
                </form>
            </div>
            <form action="/isiforum/store1" method="post">
                @csrf
                <input class="add" type="text" name="post" id="post" placeholder="Type Here">
                <button class="send-button" type="submit">Send</button>
            </form>
            @yield('isi')
        </div>
    </div>
    @yield('content')
</body>

</html>
