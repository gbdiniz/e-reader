@extends('templates.master')
@section('title', 'Show Book')
@section('content')
<header>
    <link rel="stylesheet" href="/css/read.css">
</header>
<body>
        <div class="container mt-5">
        <h1>{{ $title }}</h1>
        <h2>{{ $genre }}</h2>
        <h3>{{ $author }}</h3>
        <div id="pdfContainer">
            <iframe src="{{ asset('storage/uploads/pdfs/' . $pdfPath) }}" style="height:100em" width="100%"></iframe>
        </div>
        <p id="fileName">File Name: {{ $pdfPath }}</p>

    </div>
</body>
@endsection
