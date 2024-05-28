<header>

    <nav class="container navbar navbar-light bg-light justify-content-around">
        <!-- Logo -->
        <div id="logo" class="text-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <ul class="d-flex">
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">character</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="{{route('comics.index')}}">comics</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">movies</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">tv</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">games</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">collectibles</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">videos</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">fans</a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">news</a></a></li>
            <li class="text-uppercase list-unstyled mx-2"><a class="text-decoration-none" href="/">shop</a></li>
        </ul>
        <div class="d-flex">
            <input class="form-control mr-sm-2" type="search" placeholder="Search &#128269" aria-label="Search">
        </div>
    </nav>
</header>