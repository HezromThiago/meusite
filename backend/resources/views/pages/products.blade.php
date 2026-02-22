@extends('layouts.app')

@section('title', 'Produtos | HMS Consertos e Reformas')
@section('meta_description', 'Confira os produtos HMS com visual de catálogo e informações completas para compra e orçamento.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-4">Catálogo de Produtos</h1>
        <div class="row g-4">
            @foreach (range(1, 8) as $i)
                <div class="col-md-6 col-lg-3">
                    <article class="product-card card h-100 border-0 shadow-sm">
                        <div class="product-thumb"></div>
                        <div class="card-body">
                            <h2 class="h6 fw-bold">Estante de Aço {{ $i }}</h2>
                            <p class="small text-secondary mb-2">Ideal para estoque e organização comercial.</p>
                            <p class="fw-bold text-success mb-3">R$ {{ number_format(299 + ($i * 20), 2, ',', '.') }}</p>
                            <a href="{{ route('products.show', 'estante-'.$i) }}" class="btn btn-outline-dark btn-sm">Detalhes</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
