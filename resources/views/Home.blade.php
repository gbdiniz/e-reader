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
<nav class="navbar navbar-expand-lg bg-light">
        <div class="col-auto" style="margin:5px">
            <h1>Libre</h1>
        </div>
</nav>
</header>
<body>
    <div class="dropdown">
        <form action="{{ route('showBooks') }}" method="GET">
            <select name="title" onchange="this.form.submit()">
                @foreach($bookName as $name)
                    <option value="{{ $name }}" {{ $name == request()->query('title') ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <h1>Your image:</h1>
    <div id="imageContainer">
        @csrf
        @if(isset($fileName))
            <!-- Corrected to use public storage path directly -->
            <img src="{{ asset('storage/uploads/' . $fileName) }}" alt="{{ $fileName }}">
            @else
            <p>No image selected.</p>
        @endif
    </div>
</body>
@endsection
