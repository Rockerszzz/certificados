@extends('layouts.main')
@section('title', 'Inserir Domínio')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 form-create">
        <div class="inserir-dominio">
            <h1>INSERIR DOMÍNIO</h1>
            <form action="/dashboard/store" method="POST">
                @csrf
                <div class="linha-1">
                    <div class="form-group input-dominio input-dominio">
                        <label for="dominio">Domínio:</label>
                        <input type="text" class="form-control" id="dominio" name="dominio" placeholder="Insira o Domínio">
                    </div>
                    <div class="form-group input-servidor">
                        <label for="servidor">Servidor:</label>
                        <select name="servidor" id="servidor" class="form-control">
                            <option value="KingHost">KingHost</option>
                            <option value="DreamHost">DreamHost</option>
                            <option value="Cloudez">Cloudez</option>
                            <option value="Locaweb">Locaweb</option>
                            <option value="Externo">Externo</option>
                        </select>
                    </div>
                </div>
                <div class="linha-2">
                    <div class="form-group input-ssl">
                        <label for="ssl">SSL Ativo:</label>
                        <select name="ssl" id="ssl" class="form-control">
                            <option value="sim">Sim</option>
                            <option value="não">Não</option>
                        </select>
                    </div>
                    <div class="form-group input-tipo">
                        <label for="tipo">Tipo:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="Nenhum">Nenhum</option>
                            <option value="Let's Encrypt">Let's Encrypt</option>
                            <option value="Alpha SSL/WildCard">Alpha SSL/WildCard</option>
                        </select>
                    </div>
                </div>
                <div class="linha-3">
                    <div class="form-group input-automatico">
                        <label for="automatico">Renovação Automática:</label>
                        <select name="automatico" id="automatico" class="form-control">
                            <option value="sim">Sim</option>
                            <option value="não">Não</option>
                        </select>
                    </div>
                    <div class="form-group input-periodo">
                        <label for="periodo">Período de Renovação:</label>
                        <select name="periodo" id="periodo" class="form-control">
                            <option value="Nenhum">Nenhum</option>
                            <option value="Trimestral">Trimestral</option>
                            <option value="Anual">Anual</option>
                        </select>
                    </div>
                </div>
                <div class="linha-4">
                    <div class="form-group input-expiracao">
                        <label for="created_at">Data de Expiração:</label>
                        <input type="date" class="form-control" id="expiracao" name="expiracao" placeholder="Insira a Data">
                    </div>
                    <input type="submit" class="btn btm-primary" value="Inserir Domínio">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection