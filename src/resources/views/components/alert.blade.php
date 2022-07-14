<div {{ $attributes->merge(['class' => $isError() ? 'color-red' : '']) }}>
    @if(isset($title))
        <p>{{ $title }}</p>
    @endif
    <p>{{ $slot }}</p>
</div>
