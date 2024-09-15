@extends('templates.master')
@section('title', 'Home')
@section('styles')
    <style>
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .book-grid img {
            width: 100%;
            height: auto;
            cursor: pointer;
            border-radius: 8px;
            transition: opacity 0.3s;
        }
        .book-grid img:hover {
            opacity: 0.8;
        }
    </style>
@endsection
@section('content')
<header>
</header>
<body>
    <div class="container mt-5">
        <h1>All Covers</h1>
        <div class="book-grid">
            @foreach($books as $book)
                <a href="{{ route('readBook', ['title' => $book->title]) }}">
                    <img src="{{ asset('storage/uploads/' . basename($book->filePath)) }}" alt="{{ $book->title }}">
                </a>
            @endforeach
        </div>
    </div>
</body>
@endsection
