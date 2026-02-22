@extends('layouts.app')

@section('title', 'Estante de Aço em '.ucwords(str_replace('-', ' ', $slug)).' | HMS')
@section('meta_description', 'Página SEO de estante de aço em '.ucwords(str_replace('-', ' ', $slug)).' com serviços, produtos e contato rápido.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="fw-bold">Estante de aço em {{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
        <p class="text-secondary">Atendimento local com foco em instalação, manutenção e reforma de estantes de aço.</p>
        <div class="p-4 rounded-4 bg-light border mt-4">
            <h2 class="h5 fw-bold">Serviços na cidade</h2>
            <ul class="mb-0">
                <li>Montagem e desmontagem</li>
                <li>Reformas e reforço estrutural</li>
                <li>Projetos para comércio e galpão</li>
            </ul>
        </div>
    </div>
</section>
@endsection
