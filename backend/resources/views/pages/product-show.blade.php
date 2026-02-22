@extends('layouts.app')

@section('title', 'Produto | HMS Consertos e Reformas')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6"><div class="product-gallery rounded-4"></div></div>
            <div class="col-lg-6">
                <span class="badge bg-success-subtle text-success">Disponível</span>
                <h1 class="fw-bold mt-3 text-capitalize">{{ str_replace('-', ' ', $slug) }}</h1>
                <p class="text-secondary">Produto com estrutura reforçada, pintura eletrostática e alta durabilidade.</p>
                <h2 class="h4 fw-bold text-success">R$ 499,90</h2>
                <a href="{{ route('contact') }}" class="btn btn-warning fw-bold mt-3">Comprar via WhatsApp</a>
            </div>
        </div>
    </div>
</section>
@endsection
