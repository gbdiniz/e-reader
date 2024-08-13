@foreach($books as $book)
    <div>
        <h2><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></h2>
        <p>{{ $book->author }}</p>
    </div>
@endforeach
