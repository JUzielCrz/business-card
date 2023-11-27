<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn  my-2']) }}>
    {{ $slot }}
</button>
