@extends('layouts.app')

@section('title', 'Contato | HMS')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fw-bold mb-3">Solicite seu orçamento</h1>
                <p class="text-secondary">Fale com nossa equipe para produtos, reformas e manutenção.</p>
                <form class="card border-0 shadow-sm p-4">
                    <div class="mb-3"><label class="form-label">Nome</label><input class="form-control" type="text"></div>
                    <div class="mb-3"><label class="form-label">WhatsApp</label><input class="form-control" type="text"></div>
                    <div class="mb-3"><label class="form-label">Mensagem</label><textarea class="form-control" rows="4"></textarea></div>
                    <button class="btn btn-warning fw-bold" type="button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
