<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/{{Auth::check()?'user':'guest'}}/welcome">Astana IT team</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Explore</a>
                </li>
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="/authentication">Log in/Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile  ">Account</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>



