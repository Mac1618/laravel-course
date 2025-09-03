{{-- attribute    - any html attributes. NOTE not a props --}}
{{-- props:       - custom values that are being pass down. NOTE: not an attribute --}}
@props([
  'active' => false,
  'type' => 'a'
])

{{-- php codes here --}}
@php
    

@endphp

{{-- homework: $type as dynamic "button" or "a" tag --}}
<{{$type}}
  aria-current={{ $active ? 'page' : 'false' }}
  class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} 
  rounded-md px-3 py-2 text-sm font-medium"
  {{ $attributes }}
>
    {{ $slot }}
</{{$type}}>
