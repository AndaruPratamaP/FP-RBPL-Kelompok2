@extends('templateworkspace')

@section('displayarea')
    <br />
    <div class="container">
        <div class="row">
            <div class="account-profile1">
                <li style="list-style-type: none; border-radius: 6px; background-color: #8FC6FD; color:black">
                    <b>On-Going</b>
                </li>
                <li><a href="/addmytask" style="color: black">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a></li>
            </div>
        </div>
        <div class="row">
            @foreach ($addtask as $t)
                <div class="menu-label"
                    style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                    <div class="col-sm-10">
                        <li><a href="" style="color:black">{{ $t->TaskName }}</a></li>
                    </div>
                    <div class="col-sm-2">
                        <a href="" style="color:#FF0000">1 day</a>
                        <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
            @endforeach
            <div class="menu-label"
                style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                <div class="col-sm-10">
                    <li><a href="" style="color:black">MPB Presentasi</a></li>
                </div>
                <div class="col-sm-2">
                    <a href="" style="color:#FF0000">3 day</a>
                    <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                </div>
            </div>
            <div class="menu-label"
                style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                <div class="col-sm-10">
                    <li><a href="" style="color:black">Database</a></li>
                </div>
                <div class="col-sm-2">
                    <a href="" style="color:#12D248">7 day</a>
                    <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="account-profile1">
                <li style="list-style-type: none; border-radius: 6px; background-color: #8FC6FD; color:black">
                    <b>To Do</b>

                <li><a href="" style="color: black">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a></li>
            </div>
        </div>
        <div class="row">
            <div class="menu-label"
                style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                <div class="col-sm-10">
                    <li><a href="" style="color:black">Quiz</a></li>
                </div>
                <div class="col-sm-2">
                    <a href="" style="color:#FF0000">3 day</a>
                    <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                </div>
            </div>
            <div class="menu-label"
                style="list-style-type: none; border-radius: 37px; background-color: rgba(255,255,255,1);">
                <div class="col-sm-10">
                    <li><a href="" style="color:black">Exercise</a></li>
                </div>
                <div class="col-sm-2">
                    <a href="" style="color:#12D248">7 day</a>
                    <a href="" style="color:black; margin-left:3vw"><i class="fa-solid fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
