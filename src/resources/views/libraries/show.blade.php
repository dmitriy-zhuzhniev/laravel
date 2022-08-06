<x-layout>
    <x-slot name="title">{{ $library['title'] }}</x-slot>

    <br><br>
    {{ $library['title'] }}
    <br>

    @if(auth('admin')->user()->isSuperAdmin() ?? false)
        <br/>
        <a href="{{ route('libraries.edit', ['library' => $library->id]) }}">edit</a>
        <br/>
        <form action="{{ route('libraries.destroy', ['library' => $library->id]) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">delete</button>
        </form>
    @endauth

    <br/>
    <a href="{{ route('libraries.index') }}">all libraries</a>
</x-layout>
