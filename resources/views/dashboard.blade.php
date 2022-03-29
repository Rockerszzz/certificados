@extends('layouts.main')
@section('title', 'Área Local - Certificados SSL')
@section('content')

<div>
    
</div>
<div class="py-12">
    <div class="">
        <div class="">
            
            @foreach ($dominios ?? '' as $dominio)
            <div class="listagem-dominios">
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">Domínio:</p>
                    <p><a href="#">{{ $dominio->dominio }}</a></p>
                </div>
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">SSL:</p>
                    <p>{{ $dominio->ssl }}</p>
                </div>
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">Servidor:</p>
                    <p>{{ $dominio->servidor }}</p>
                </div>
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">Tipo:</p>
                    <p>{{ $dominio->tipo }}</p>
                </div>
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">Renovação Automática:</p>
                    <p>{{ $dominio->automatico }}</p>
                </div>
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">Renovação:</p>
                    <p>{{ $dominio->periodo }}</p>
                </div>
                <div>
                    <p style="font-weight: 700; letter-spacing: 1px;">Expira em:</p>
                    <p style="color: #ff0000">{{ date('d/m/Y', strtotime($dominio->expiracao)) }}</p>
                </div>
                <div class="dominio-btn">
                    <a href="/dashboard/edit/{{ $dominio->id }}" class="btn btn-info edit-btn">Editar</a>
                    <form action="/dashboard/{{ $dominio->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="pagination">
    <p>{{$dominios->links()}}</p>
</div>
@endsection