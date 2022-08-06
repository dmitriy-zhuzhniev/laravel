<x-layout>
    <x-slot name="title">Edit {{ $library['title'] }}</x-slot>

    <br><br>

    <form action="{{ route('libraries.update', ['library' => $library->id]) }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ $library->title }}" />

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('libraries.index') }}">all libraries</a>
</x-layout>
