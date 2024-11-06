<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn outline outline-1 bg-gray-300 my-1 hover:outline-white hover:text-gray-200 focus:outline-white']) }}>
    {{ $slot }}
</button>
