@extends('layouts.app')

@section('title', 'Depoimentos | HMS')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h1 class="fw-bold mb-4">Depoimentos de clientes</h1>
        <div class="row g-4">
            @foreach ([['nome' => 'Carlos', 'cidade' => 'Osasco'], ['nome' => 'Juliana', 'cidade' => 'Barueri'], ['nome' => 'Marcos', 'cidade' => 'São Paulo']] as $d)
                <div class="col-md-6 col-lg-4">
                    <article class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <p class="mb-3">"Serviço impecável, entrega rápida e ótima qualidade nas estantes."</p>
                            <p class="mb-0 fw-bold">{{ $d['nome'] }} - {{ $d['cidade'] }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
