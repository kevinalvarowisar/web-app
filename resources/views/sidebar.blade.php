<aside class="sidebar">
    <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
    <a class="{{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">Product</a>
    <a class="{{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">Service</a>
    <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
    <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
</aside>
