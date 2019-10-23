@include('layout.nav')

<div id="promo">
    <div class="jumbotron shadow-lg">
        <form method="post" action="/save">
            @csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="Podaj tytuł" class="form-control">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" placeholder="Wpisz treść"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Zapisz</button>
            </div>
        </form>
    </div>
</div>

@include('layout.footer')