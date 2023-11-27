@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'alert alert-warning alert-dismissible fade show']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
