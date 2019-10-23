@extends('layout.layout')

@section('title', '- strona główna')

@section('idLastArt')
{{ $last->id }}
@endsection

@section('headLastArt')
{{ $last->title }}
@endsection

@section('parLastArt')
{{ substr($last->content, 0, 300) }}...
@endsection

@section('hWelcome')
    Cześć! Jestem Kasia
@endsection

@section('pWelcome')
    A to mój blog o szyciu (i nie tylko:))
@endsection

@section('idWhy')

@endsection

@section('hWhy')
    Zdaj się na szczęśliwy traf
@endsection

@section('Why')
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
@endsection

@section('h2Why1')
    {{ $posts[0]->id }}.
    {{ $posts[0]->title }}
@endsection

@section('h2Why2')
    {{ $posts[1]->id }}.
    {{ $posts[1]->title }}
@endsection

@section('h2Why3')
    {{ $posts[2]->id }}.
    {{ $posts[2]->title }}
@endsection

@section('icon')
    {{--TODO: switch: category-> icon ios-cut md-bulb ios-heart--}}
@endsection

@section('pWhy1')
    {{ substr($posts[0]->content, 0, 300) }}...

@endsection

@section('pWhy2')
    {{ substr($posts[1]->content, 0, 300) }}...

@endsection

@section('pWhy3')
    {{ substr($posts[2]->content, 0, 300) }}...

@endsection

