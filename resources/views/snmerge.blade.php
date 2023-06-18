{{-- @extends('templateworkspace')
@section('isi')
<form action={{ route('merge.pdf') }} method="post" enctype="multipart/form-data">
    @csrf
    <div class="drag-area" ondrop="upload_file(event)" ondragover="return false">
        <button>Browse File</button>
        <br>
        <p>Atau drag berkasmu di area putih ini ^^</p>
        <input type="file" name="file" id="file" hidden>
    </div>
    <div class="other">
        <p>Pilih dokumen yang ingin kamu gabungkan:</p>
    </div>
    <div class="file-unggah">
        <p><a href="https://www.pdf2go.com/merge-pdf" class="tbl-pink">+</a> </p>
        <br>
        <br>
        <input type="file" name="filenames[]" class="myfrm form-control" multiple="">
        <button type="submit">Merge</button>
        {{-- <a href class="tbl-pink">Merge</a>
    </div>
</form>
    <div class="other">
        <p>Format file yang didukung: <i class="fa-solid fa-file"></i> PDF</p>
    </div>
@endsection --}}

{{-- @extends('layouts.app') --}}
@extends('templateworkspace')
<link href="{{ asset('css/merger.css')}}" rel="stylesheet">
@section('sidebar')
    <nav class="sidenav nav nav-pills flex-column ml-4">
        <a class="nav-link mb-2" aria-current="page" href="/dashboardworkspace/{userid}">
            <i class="fa-solid fa-folder-open mr-3"></i>
            Workspace</a>
        <a class="choose nav-link mb-2" href="/merger">
            <i class="fas fa-file mr-3"></i>
            SN Merger</a>
        <a class="nav-link mb-2" href="/calendar">
            <i class="fas fa-calendar-alt mr-3"></i>
            Calendar</a>
        <a class="nav-link mb-2">
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
@endsection

@section('isi')
    <form action={{ route('merge.pdf') }} method="post" enctype="multipart/form-data">
        @csrf
        {{-- <div class="drag-area" ondrop="upload_file(event)" ondragover="return false">
        <button>Browse File</button>
        <br>
        <p>Atau drag berkasmu di area putih ini ^^</p>
        <input type="file" name="file" id="file" hidden>
    </div> --}}
        <div class="other">
            <br>
            <p>Pilih dokumen yang ingin kamu gabungkan:</p>
        </div>
        <div class="file-unggah">
            {{-- <p><a href="https://www.pdf2go.com/merge-pdf" class="tbl-pink">+</a> </p> --}}
            <br>
            <input type="file" name="filenames[]" class="myfrm form-control" multiple="" style="border: 0px;">
            <br>
            <button class="merge" type="submit" style="margin-right: 70%">Merge</button>
            {{-- <a href class="tbl-pink">Merge</a>  --}}
        </div>
    </form>
    <div class="other">
        <p>Format file yang didukung: <i class="fa-solid fa-file"></i> PDF</p>
    </div>
@endsection
