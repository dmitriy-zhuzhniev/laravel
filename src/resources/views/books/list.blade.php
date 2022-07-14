<x-layout>
    <x-slot name="title">Books</x-slot>
    <ul>
        @each('books.list-item', $books, 'book')
    </ul>
</x-layout>
