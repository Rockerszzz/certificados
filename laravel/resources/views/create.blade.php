@extends('layouts.main')
@section('title', 'Área Local')
@section('content')
<div id="domain-create-container" class="col-md6 offset-md-3">
    <h1>Inserir Domínio</h1>
    <form action="/dashboard/dominios/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="dominio">Domínio</label>
            <input type="text" class="form-control" id="dominio" name="dominio" placeholder="Insira o Domínio">
        </div>
        <div class="form-group">
            <label for="servidor">Servidor</label>
            <input type="text" class="form-control" id="servidor" name="servidor" placeholder="Insira o Servidor">
        </div>
        <div class="form-group">
            <label for="ssl">SSL:</label>
            <select name="ssl" id="ssl" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Insira o Tipo">
        </div>
        <div class="form-group">
            <label for="automatico">Renovação Automática:</label>
            <select name="automatico" id="automatico" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="periodo">Período de Renovação</label>
            <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Insira o Período">
        </div>
        <div class="form-group">
            <label for="created_at">Expira em:</label>
            <input type="date" class="form-control" id="expiracao" name="expiracao" placeholder="Insira a Data">
        </div>
        <input type="submit" class="btn btm-primary" value="Criar Evento">
    </form>
</div>

@endsection