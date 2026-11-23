@vite('resources/sass/app.scss')

<div class="container text-center my-5">
    <h1 class="mb-4">Belajar Controller & View pada Laravel</h1>

    <img
        class="img-thumbnail"
        src="{{ Vite::asset('resources/images/laravel.png') }}"
        alt="image"
    >

    <div class="col-md-2 offset-md-5 mt-4">
        <div class="d-grid gap-2">
            <a class="btn btn-dark" href="">Home</a>
        </div>
    </div>
</div>

@vite('resources/js/app.js')