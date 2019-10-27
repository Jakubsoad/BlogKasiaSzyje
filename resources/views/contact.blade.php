@include('layout.nav')

<div id="promo">
        <div class="jumbotron shadow-lg">
            {{--TODO: wyświetlaj bledy z sesji--}}
            <h2>Pytania? Sugestie? Propozycje współpracy?</h2>
            <h1>Pisz!</h1>
            <form method="post">
                @csrf
                <input type="text" placeholder="Podpisz się" name="name" class="form-control" value="{{ old('name') }}">
                <div>{{ $errors->first('name') }}</div>
                <input type="text" placeholder="No i nie zapomnij wpisać maila" name="mail" class="form-control" value="{{ old('mail') }}">
                <div>{{ $errors->first('mail') }}</div>
                <textarea name="message" placeholder="A tu napisz wiadomość" class="form-control" >{{ old('message') }}</textarea>
                <div>{{ $errors->first('message') }}</div>
                <button class="btn">Wyślij</button>
            </form>
        </div>
</div>

@include('layout.footer')
