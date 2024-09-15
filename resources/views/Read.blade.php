@extends('templates.master')
@section('title', 'Show Book')
@section('styles')
    <style>
        #imageContainer img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection
@section('content')
<header>
</header>
<body>
    <div class="container mt-5">
        <h1>{{ $title }}</h1>
        <div id="imageContainer">
            @if(isset($coverImage))
                <img src="{{ asset('storage/uploads/covers/' . $coverImage) }}">
                <p>Cover IMG: {{ $coverImage }}</p>

            @else
                <p>No image selected.</p>
                
            @endif
        </div>
    </div>
        <div class="container mt-5">
        <h1>{{ $title }}</h1>
        <div id="pdfContainer">
            <iframe src="{{ asset('storage/uploads/pdfs/' . $pdfPath) }}" style="height:100em" width="100%"></iframe>

        </div>
    </div>
</body>
@endsection
