<x-layout>
    <x-slot name="title">Create book</x-slot>

    @if($errors->any())
        <div class="color-red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" />
        <input type="text" name="description" placeholder="Description" value="{{ old('description') }}" />

        <button type="submit">Create</button>
    </form>
</x-layout>
