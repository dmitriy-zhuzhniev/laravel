<x-layout>
    <x-slot name="title">Libraries</x-slot>
    <ul>
        @each('libraries.list-item', $libraries, 'library')
    </ul>

    <br>
    <a href="{{ route('libraries.create') }}">Create library</a>
</x-layout>
