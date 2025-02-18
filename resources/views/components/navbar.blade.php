<nav class="navbar">
    <a href="{{ route('home') }}" class="logo">INCODE</a>
    <div class="nav-menu">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
        <a href="#" class="lets-talk-btn">Let's Talk →</a>
    </div>
</nav> 