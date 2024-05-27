<header>

    <nav class="navbar navbar-light bg-light justify-content-around">
        <!-- Logo -->
        <div id="logo" class="text-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <ul class="d-flex">
            @foreach($links as $link)
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">{{ $link }}</a></li>
            @endforeach
        </ul>
        <div class="d-flex">
            <input class="form-control mr-sm-2" type="search" placeholder="Search &#128269" aria-label="Search">
        </div>
    </nav>
</header>