@extends('layouts.main')
@section('title', 'Área Local - Certificados SSL')
@section('content')

<div class="py-12">
    <div class="">
        <div class="">
            
            @foreach ($dominios ?? '' as $dominio)
            <div class="listagem-dominios">
                <div>
                    <p>Domínio:</p>
                    <p><a href="#">{{ $dominio->dominio }}</a></p>
                </div>
                <div>
                    <p>SSL:</p>
                    <p>{{ $dominio->ssl }}</p>
                </div>
                <div>
                    <p>Tipo:</p>
                    <p>{{ $dominio->tipo }}</p>
                </div>
                <div>
                    <p>Renovação Automática:</p>
                    <p>{{ $dominio->automatico }}</p>
                </div>
                <div>
                    <p>Período de Renovação:</p>
                    <p>{{ $dominio->periodo }}</p>
                </div>
                <div>
                    <p>Expira em:</p>
                    <p>{{ date('d/m/Y', strtotime($dominio->created_at)) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection