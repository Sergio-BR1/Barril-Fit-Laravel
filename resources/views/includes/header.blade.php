<nav class="nav-bar">
    <div class="logo"><a id="logo" href="/"><img src="/assets/images/logo.png"></a></div>
    <div class="nav-list">
        <ul>
            <li class="nav-item"><a href="/" >Home</a></li>
            <li class="nav-item"><a href="/">Sobre nós</a></li>
            <li class="nav-item"><a href="/">Planos</a></li>
            <li class="nav-item"><a href="/">Contato</a></li>
            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </div>
    <div class="mobile-menu-icon">
        <button onclick="menuShow()"><img class="menu-icon" src="assets/images/menu_white_36dp.svg"></button>
    </div>
</nav>
<div class="mobile-menu">
        <ul>
            <li class="nav-item"><a href="/">Home</a></li>
            <li class="nav-item"><a href="/">Sobre nós</a></li>
            <li class="nav-item"><a href="/">Planos</a></li>
            <li class="nav-item"><a href="/">Contato</a></li>
            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
        </ul>
</div>

