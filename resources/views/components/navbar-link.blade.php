<li>
    <a 
        {{$attributes->class(["block pt-1 px-1 h-full rounded-sm hover:bg-orange-500"])}} 
        href="{{ $href }}"
    >
        {{ $slot }}
    </a>
</li>