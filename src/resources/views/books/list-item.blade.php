<li>
    <a href="{{ route('books.view', ['id' => $book->id]) }}">{{ $book->title }}</a> by {{ $book->user_name }}
</li>
