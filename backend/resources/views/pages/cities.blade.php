@extends('layouts.app')

@section('title', 'Cidades Atendidas | HMS')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-4">Cidades Atendidas</h1>
        <div class="row g-3">
            @foreach (['osasco', 'barueri', 'carapicuiba', 'santana-de-parnaiba'] as $city)
                <div class="col-md-6 col-lg-3">
                    <a class="city-link d-block p-3 rounded-3 shadow-sm bg-white text-decoration-none" href="{{ route('cities.show', $city) }}">
                        Estante de aço em {{ ucwords(str_replace('-', ' ', $city)) }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
