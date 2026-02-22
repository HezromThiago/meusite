@extends('layouts.app')

@section('title', 'HMS Consertos e Reformas | Estantes de Aço e Soluções')
@section('meta_description', 'Estantes de aço, consertos e reformas com atendimento profissional para empresas e residências.')

@section('content')
<section class="hero py-5">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-warning text-dark mb-3">Atendimento em São Paulo e região</span>
                <h1 class="display-5 fw-bold">Estantes de Aço, Consertos e Reformas com Qualidade</h1>
                <p class="lead text-secondary">Soluções sob medida para comércio, indústria e residências. Organização, resistência e acabamento profissional.</p>
                <a href="{{ route('contact') }}" class="btn btn-warning btn-lg fw-bold">Fazer orçamento</a>
            </div>
            <div class="col-lg-5">
                <div class="hero-card p-4 rounded-4 shadow">
                    <h2 class="h5 fw-bold">Por que escolher a HMS?</h2>
                    <ul class="mt-3 mb-0">
                        <li>Equipe especializada</li>
                        <li>Entrega rápida</li>
                        <li>Suporte no pós-venda</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold mb-4">Produtos em destaque</h2>
        <div class="row g-4">
            @foreach ([['slug' => 'estante-de-aco-60x30', 'nome' => 'Estante de Aço 60x30'], ['slug' => 'estante-de-aco-industrial', 'nome' => 'Estante de Aço Industrial'], ['slug' => 'prateleira-reforcada', 'nome' => 'Prateleira Reforçada']] as $item)
                <div class="col-md-6 col-lg-4">
                    <article class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h3 class="h6 fw-bold">{{ $item['nome'] }}</h3>
                            <p class="text-secondary">Modelo resistente e ideal para estoque e organização.</p>
                            <a class="stretched-link" href="{{ route('products.show', $item['slug']) }}">Ver detalhes</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
