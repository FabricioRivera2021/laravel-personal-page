<li>
    <a 
        {{$attributes->class(["block pt-1 px-1 h-full rounded-sm hover:bg-slate-200 hover:text-slate-700"])}} 
        href="{{ $href }}"
    >
        {{ $slot }}
    </a>
</li>