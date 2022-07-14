<x-layout>
    <x-slot name="title">{{ $book['title'] }}</x-slot>

    <p>by {{ $book['author'] }}</p>
    <a href="{{ route('books.list') }}">all books</a>
</x-layout>
