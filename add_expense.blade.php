@extends('layouts.app')

@section('title', 'Adicionar Despesa')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-card">
        <h1>Adicionar Despesa</h1>
        <form action="{{ route('add_expense') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" required>
            </div>
            <div class="form-group">
                <label for="valor_total">Valor Total:</label>
                <input type="number" id="valor_total" name="valor_total" required>
            </div>
            <div class="form-group">
                <label for="parcelas">Parcelas:</label>
                <input type="number" id="parcelas" name="parcelas" required>
            </div>
            <div class="form-group">
                <label for="parcelas_pagas">Parcelas Pagas:</label>
                <input type="number" id="parcelas_pagas" name="parcelas_pagas" required>
            </div>
            <div class="form-group">
                <label for="data_inicio">Data de Início:</label>
                <input type="date" id="data_inicio" name="data_inicio" required>
            </div>
            <div class="form-group">
                <label for="recorrente">Recorrente:</label>
                <input type="checkbox" id="recorrente" name="recorrente">
            </div>
            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea id="observacoes" name="observacoes"></textarea>
            </div>
            <div class="form-group">
                <label for="metodo_pagamento">Método de Pagamento:</label>
                <input type="text" id="metodo_pagamento" name="metodo_pagamento" required>
            </div>
            <button type="submit" class="button-primary">Adicionar</button>
        </form>
    </div>
</div>
@endsection
