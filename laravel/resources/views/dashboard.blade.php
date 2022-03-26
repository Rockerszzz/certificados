@extends('layouts.main')
@section('title', 'Área Local')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg listagem-dominios">
            
            @foreach ($dominios ?? '' as $dominio)
                <p> ID:&nbsp;{{ $dominio->id }} -
                    Domínio:&nbsp;<a href="#">{{ $dominio->dominio }}</a> -
                    SSL:&nbsp;{{ $dominio->ssl }} -
                    Tipo:&nbsp;{{ $dominio->tipo }} -
                    Renovação Automática:&nbsp;{{ $dominio->automatico }} -
                    Período de Renovação:&nbsp;{{ $dominio->periodo }} -
                    Expira em:&nbsp;{{ date('d/m/Y', strtotime($dominio->created_at)) }} 
                </p>
            @endforeach

        </div>
    </div>
</div>
@endsection