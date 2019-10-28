@include('layout.nav')
{{--TODO: Sortowanie--}}
{{--TODO: Sortowanie + paginacja--}}
<div class="sort d-flex justify-content-between">
    <div class="sort">
    <form method="get">
        <label>
            <select class="custom-select" name="category">
                <option value="reset" selected>Wybierz kategorię...</option>
                @foreach($category as $catKey=>$catValue)
                    <option value="{{$catKey}}" @if(isset($actualCategory) &&  $catKey == $actualCategory) selected @else @endif>
                        @switch($catKey)
                            @case('sewing')
                        Szycie
                            @break
                            @case('upholstery')
                        Tapicerowanie
                            @break
                            @case('idea')
                        Pomysły
                            @break
                        @endswitch
                    </option>
                @endforeach
            </select>
        </label>
        <button type="submit" class="btn">Wybierz</button>
    </form>
</div>
</div>

@foreach($posts as $post)
    <div id="promo">
        <a href="/blog/{{$post->id}}">
        <div class="jumbotron">
            <i class="icon ion-{{$category[$post->category]}}"></i>
            <h1>{{ $post->id }}. {{ $post->title }}</h1>
            <p>{{substr($post->content, 0, 400)}}...</p>
        </div>
        </a>
    </div>
@endforeach
<nav>
    {{ $posts->appends(['category' => $actualCategory ?? ''])->links('vendor.pagination.bootstrap-4') }}
</nav>

@include('layout.footer')
