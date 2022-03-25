<x-app-layout>
    <x-slot name="header">
    <div class="barra-inf">
        <div class="barra-inf-esq">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Gerenciamento de Certificados SSL') }}
            </h2>
        </div>
        <div class="barra-inf-dir">
            <form action="/dashboard" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Domínio">
            </form>
        </div>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
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
</x-app-layout>