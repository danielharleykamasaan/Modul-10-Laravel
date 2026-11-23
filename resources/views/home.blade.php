<title>{{ $pageTitle }}</title>
@vite('resources/sass/app.scss')

<a href="{{ route('home') }}" class="nav-link active">Home</a>

<a href="{{ route('employees.index') }}" class="nav-link">
    Employee List
</a>

<a href="{{ route('profile') }}" class="btn btn-outline-light">
    My Profile
</a>

<div class="container mt-4">
    <h4>{{ $pageTitle }}</h4>
    <hr>

    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
        <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
    </div>
</div>

@vite('resources/js/app.js')