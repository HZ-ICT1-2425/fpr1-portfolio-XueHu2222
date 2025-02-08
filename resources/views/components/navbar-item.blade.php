@props(['item'])

<a href="{{ route($item['route']) }}"
   class="navbar-item {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
    {{ $item['title'] }}
</a>
