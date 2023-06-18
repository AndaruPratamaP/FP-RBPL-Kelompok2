<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-[#E8E8E4]">
    <div class="relative h-screen">
        <img class="absolute bottom-0 w-full" src="{{ asset('image/gelombang.png') }}" alt="">
        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="max-w-[577px] bg-white rounded-lg p-[20px] shadow-md">
                <form class="p-[30px]">
                    <div class="flex flex-col gap-y-2">
                        <div>
                            <label for="uname">Username</label>
                            <input class="w-full border-[2.5px] rounded-2xl border-[#8383BE] p-2" type="text" name="uname" id="uname"
                                placeholder="Enter your username here ^_^">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input class="w-full" type="text" name="email" id="email"
                                placeholder="Enter your username here ^_^">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
</html>
