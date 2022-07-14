<x-layout>
    <x-slot name="title">Admin login</x-slot>

    @if($errors->any())
        <div class="color-red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />

        <button type="submit">Login</button>
    </form>
</x-layout>
