<x-layout>
    <x-slot name="title">Create library</x-slot>

    @if($errors->any())
        <div class="color-red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('libraries.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" />

        <button type="submit">Create</button>
    </form>
</x-layout>
