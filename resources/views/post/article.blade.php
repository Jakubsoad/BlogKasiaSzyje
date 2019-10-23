@include('layout.nav')
<div id="promo">
        <div class="jumbotron shadow-lg">
            <i class="icon ion-{{$category[$post->category]}}"></i>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>

        </div>
</div>


{{--TODO: Formatowac jak 3 losowe posty z welcome--}}
<div class="dark-section">
    <div class="container site-section" id="why">
        <h1>Inne z tej kategorii:</h1>
        <div class="row">
            @foreach($posts as $post)
            <div class="item col-md-4"><i class="icon ion-{{$category[$post->category]}}"></i>
                <a href="/blog/{{$post->id}}">

                    <h2>{{$post->title}}</h2>
                    <p class="text-center">
                        {{substr($post->content, 0, 300)}}...
                    </p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{--Inne z tej kategorii:--}}
{{--1. wziac kolekcje postow z danej kategorii--}}
{{--2. wylosowac 3 i wyswietlic na dole strony--}}

@include('layout.footer')