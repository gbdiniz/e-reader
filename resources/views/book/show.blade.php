<h1>{{ $book->title }}</h1>
<p>{{ $book->author }}</p>
<div>{{ $book->content }}</div>

@auth
    <form method="POST" action="{{ route('bookmarks.store') }}">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book->id }}">
        <input type="hidden" name="page_number" id="page_number" value="1">
        <button type="submit">Save Progress</button>
    </form>
@endauth
