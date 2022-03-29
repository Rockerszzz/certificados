@extends('layouts.main')
@section('title', 'Editar Domínio')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 form-create">
        <div class="inserir-dominio">
            <h1>EDITAR DOMÍNIO</h1>
            <form action="/dashboard/update/{{ $dominio->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="linha-1">
                    <div class="form-group input-dominio input-dominio">
                        <label for="dominio">Domínio:</label>
                        <input type="text" class="form-control" id="dominio" name="dominio" placeholder="Insira o Domínio" value="{{ $dominio->dominio }}" required>
                    </div>
                    <div class="form-group input-servidor">
                        <label for="servidor">Servidor:</label>
                        <select name="servidor" id="servidor" class="form-control" required>
                            <option value="KingHost" @if($dominio->servidor == 'KingHost') selected @endif >KingHost</option>
                            <option value="DreamHost" @if($dominio->servidor == 'DreamHost') selected @endif >DreamHost</option>
                            <option value="Cloudez" @if($dominio->servidor == 'Cloudez') selected @endif >Cloudez</option>
                            <option value="Locaweb" @if($dominio->servidor == 'Locaweb') selected @endif >Locaweb</option>
                            <option value="Externo" @if($dominio->servidor == 'Externo') selected @endif >Externo</option>
                        </select>
                    </div>
                </div>
                <div class="linha-2">
                    <div class="form-group input-ssl">
                        <label for="ssl">SSL Ativo:</label>
                        <select name="ssl" id="ssl" class="form-control" required>
                            <option value="sim" @if($dominio->ssl == 'sim') selected @endif >Sim</option>
                            <option value="não" @if($dominio->ssl == 'não') selected @endif >Não</option>
                        </select>
                    </div>
                    <div class="form-group input-tipo">
                        <label for="tipo">Tipo:</label>
                        <select name="tipo" id="tipo" class="form-control" required>
                            <option value="Nenhum" @if($dominio->tipo == 'Nenhum') selected @endif >Nenhum</option>
                            <option value="Let's Encrypt" @if($dominio->tipo == "Let's Encrypt") selected @endif >Let's Encrypt</option>
                            <option value="Alpha SSL/WildCard" @if($dominio->tipo == 'Alpha SSL/WildCard') selected @endif >Alpha SSL/WildCard</option>
                        </select>
                    </div>
                </div>
                <div class="linha-3">
                    <div class="form-group input-automatico">
                        <label for="automatico">Renovação Automática:</label>
                        <select name="automatico" id="automatico" class="form-control" required>
                            <option value="sim" @if($dominio->automatico == 'sim') selected @endif >Sim</option>
                            <option value="não" @if($dominio->automatico == 'não') selected @endif >Não</option>
                        </select>
                    </div>
                    <div class="form-group input-periodo">
                        <label for="periodo">Período de Renovação:</label>
                        <select name="periodo" id="periodo" class="form-control" required>
                            <option value="Nenhum" @if($dominio->periodo == 'Nenhum') selected @endif >Nenhum</option>
                            <option value="Trimestral" @if($dominio->periodo == 'Trimestral') selected @endif >Trimestral</option>
                            <option value="Anual" @if($dominio->periodo == 'Anual') selected @endif >Anual</option>
                        </select>
                    </div>
                </div>
                <div class="linha-4">
                    <div class="form-group input-expiracao">
                        <label for="expiracao">Data de Expiração:</label>
                        <input type="date" class="form-control" id="expiracao" name="expiracao" required>
                    </div>
                    <input type="submit" class="btn btm-primary" value="Editar Domínio">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection