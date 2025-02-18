@props(['item'])


<a href="{{ route($item['route']) }}"
   class="navbar-item {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
    @if(isset($item['icon']))
        <img src="{{ asset($item['icon']) }}" alt="{{ $item['title'] }} Icon">
    @else
        {{ $item['title'] }}
    @endif
</a>
