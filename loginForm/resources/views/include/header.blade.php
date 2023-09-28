<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @auth
            <a class="nav-item nav-link " href="{{route('logout')}}">logout</a>
            @else
            <a class="nav-item nav-link" href="{{route('login')}}">login</a>
            <a class="nav-item nav-link" href="{{route('registration')}}">Registration</a>
            @endauth

        </div>
    </div>
</nav>
