<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HMS Consertos e Reformas')</title>
    <meta name="description" content="@yield('meta_description', 'Especialistas em estantes de aço, consertos e reformas para comércio e indústria.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
<header class="topbar py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <span class="small">Atendimento rápido via WhatsApp</span>
        <a href="{{ route('contact') }}" class="btn btn-sm btn-warning fw-bold">Solicitar orçamento</a>
    </div>
</header>

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">HMS Consertos e Reformas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto gap-lg-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cities.index') }}">Cidades</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('testimonials.index') }}">Depoimentos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer py-4 mt-5">
    <div class="container text-center">
        <p class="mb-1 fw-semibold">HMS Consertos e Reformas</p>
        <small>© {{ date('Y') }} - Todos os direitos reservados.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/site.js') }}"></script>
</body>
</html>
