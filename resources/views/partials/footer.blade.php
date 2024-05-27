@php

$link_footer = config('footer_db');
$link_fot_mid = config('footer_list_db');

@endphp

<footer>
    <!-- top -->
    <section id="footer_top">
        <div class="p-5">
            <div class="container">
                <ul class="d-flex justify-content-between align-items-center list-unstyled">
                    @foreach($link_footer as $links)
                        <li class="d-flex justify-content-around  align-items-center  ">
                            <img class="img-fluid " src="{{Vite::asset($links['icon'])}}" alt="Image" />
                            <a class="text-decoration-none text-uppercase text-white" href="/">{{$links['text']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- medium -->
    <section id="footer_mid">
        <div>
            <div class="container d-flex ">
                <div id="list">

                    @foreach($link_fot_mid as $links)
                        <div id="list_links">
                            <h4 class="text-white">{{ $links['title'] }}</h4>
                            <ul class="list-unstyled ">
                                @foreach ($links['links'] as $link)
                                    <li><a href="/">{{ $link }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                </div>
                <div id="dc-comics"></div>
            </div>
        </div>
    </section>
    <!-- bottom -->
    <section id="footer_bot">

        <div class="container d-flex justify-content-between align-items-center">
            <button class="text-uppercase">sign up now!</button>
            <div class="d-flex align-items-center">
                <div id="follow" class="text-uppercase fs-4 fw-bold  ">follow us</div>
                <a href=""> <img class="img-fluid" src="{{Vite::asset('resources/img/footer-facebook.png')}}"
                        alt="Image"></a>
                <a href=""> <img class="img-fluid" src="{{Vite::asset('resources/img/footer-twitter.png')}}"
                        alt="Image"></a>
                <a href=""> <img class="img-fluid" src="{{Vite::asset('resources/img/footer-youtube.png')}}"
                        alt="Image"></a>
                <a href=""> <img class="img-fluid" src="{{Vite::asset('resources/img/footer-pinterest.png')}}"
                        alt="Image"></a>
                <a href=""> <img class="img-fluid" src="{{Vite::asset('resources/img/footer-periscope.png')}}"
                        alt="Image"></a>
            </div>
        </div>
    </section>
</footer>