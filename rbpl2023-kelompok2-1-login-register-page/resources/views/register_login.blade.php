<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body class="background">
    <div class="holder">
        <img class="gelombang" src="{{ asset('image/gelombang.png') }}" alt="">

        <div class="box-container">
            <div class="text-container">
                <p class="text_hi">Hi There! Welcome To</p>
            </div>
            <div class="box">
                <div>
                    <form action="{{ route('register_process') }}" class="form-container" method="post">
                        @csrf
                        <label class="labels" for="uname">Username</label>
                        <input class="input" type="text" name="uname" id="uname"
                            placeholder="Enter your username here ^_^">
                        @error('uname')
                            <span class="">{{ $message }}</span>
                        @enderror
                        <br>
                        <label class="labels" for="email">Email</label>
                        <input class="input" type="text" name="email" id="email"
                            placeholder="Enter your email address here ^_^">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                        <br>
                        <label class="labels" for="number">Phone Number</label>
                        <input class="input" type="number" name="number" id="number"
                            placeholder="Enter your phone number here ^_^">

                        @error('number')
                            <small>{{ $message }}</small>
                        @enderror
                        <br>
                        <label class="labels" for="pass">Password</label>
                        <input class="input" type="text" name="pass" id="pass"
                            placeholder="Enter your password here ^_^">
                        @error('pass')
                            <small>{{ $message }}</small>
                        @enderror
                        <br>

                        <div class="button-container">
                            <button class="button-submit">Sign Up</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
