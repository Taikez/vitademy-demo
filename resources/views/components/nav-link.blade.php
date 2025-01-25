@props(['isActive' => false])

<a {{ $attributes }}
    class="{{ $isActive ? 'bg-[#140b21] text-white' : 'text-gray-300 hover:bg-[#140b21] hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a>
