@extends('templates.master')
@section('title', 'HOME')
@section('styles')
    <style>
        ul li {
            display: inline;
        }
    </style>
@endsection
@section('content')
<header>
    <div class="row justify-content-between p-3">
        <div class="col-auto">
            <h1>TITLE</h1>
        </div>
        <div class="col-auto">
            <ul>
                <li>HOME</li>
                <li>ABOUT US</li>
                <li>CONTACT</li>
            </ul>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary">BUTTON</button>
        </div>
    </div>
</header>
@endsection
