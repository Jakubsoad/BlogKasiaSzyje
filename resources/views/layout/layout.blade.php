@include('layout.nav')
<div id="promo">
    <a href="/blog/@yield('idLastArt')">
    <div class="jumbotron shadow-lg">
        <h1>@yield('headLastArt')</h1>
        <p>@yield('parLastArt')</p>
    </div>
    </a>
</div>
<div class="container site-section" id="welcome">
    <h1>@yield('hWelcome')</h1>
    <p>@yield('pWelcome')</p>
</div>
<div class="dark-section">
    <div class="container site-section" id="why">
        <h1>@yield('hWhy')</h1>
        <div class="row">
            @yield('Why')
        </div>
    </div>
</div>

<div class="container site-section" id="gallery">
    <h1>Moje realizacje</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card"><a href="{{asset('/img/gallery/fotelbordo.jpg')}}" target="_blank" data-lightbox="projects">
                    <img class="img-fluid" src="{{asset('/img/gallery/fotelbordo.jpg')}}"></a></div>
        </div>
        <div class="col-md-4">
            <div class="card"><a href="{{asset('/img/gallery/sofaturkus.jpeg')}}" target="_blank" data-lightbox="projects">
                    <img class="img-fluid" src="{{asset('/img/gallery/sofaturkus.jpeg')}}"></a></div>
        </div>
        <div class="col-md-4">
            <div class="card"><a href="{{asset('/img/gallery/kocyk.jpeg')}}" target="_blank" data-lightbox="projects">
                    <img class="img-fluid" src="{{asset('/img/gallery/kocyk.jpeg')}}"></a></div>
        </div>
    </div>
</div>
@include('layout.footer')
