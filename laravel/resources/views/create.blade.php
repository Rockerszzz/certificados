@extends('layouts.main')
@section('title', 'Área Local')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 form-create">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Inserir Domínio</h1>
            <form action="/dashboard/store" method="POST">
                @csrf
                <div class="linha-1">
                    <div class="form-group input-dominio input-dominio">
                        <label for="dominio">Domínio</label>
                        <input type="text" class="form-control" id="dominio" name="dominio" placeholder="Insira o Domínio">
                    </div>
                    <div class="form-group input-servidor">
                        <label for="servidor">Servidor</label>
                        <input type="text" class="form-control" id="servidor" name="servidor" placeholder="Insira o Servidor">
                    </div>
                </div>
                <div class="linha-2">
                    <div class="form-group input-ssl">
                        <label for="ssl">SSL:</label>
                        <select name="ssl" id="ssl" class="form-control">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="form-group input-tipo">
                        <label for="tipo">Tipo:</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Insira o Tipo">
                    </div>
                </div>
                <div class="linha-3">
                    <div class="form-group input-automatico">
                        <label for="automatico">Renovação Automática:</label>
                        <select name="automatico" id="automatico" class="form-control">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    <div class="form-group input-periodo">
                        <label for="periodo">Período de Renovação</label>
                        <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Insira o Período">
                    </div>
                </div>
                <div class="linha-4">
                    <div class="form-group input-expiracao">
                        <label for="created_at">Expira em:</label>
                        <input type="date" class="form-control" id="expiracao" name="expiracao" placeholder="Insira a Data">
                    </div>
                    <input type="submit" class="btn btm-primary" value="Inserir Domínio">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection