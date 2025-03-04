@extends('layouts.app')

@section('title', 'Adicionar Receita')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-card">
        <h1>Adicionar Receita</h1>
        <form action="{{ route('add_income') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Valor:</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="income_type">Tipo de Receita:</label>
                <input type="text" id="income_type" name="income_type" required>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <input type="text" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="month">Mês:</label>
                <input type="number" id="month" name="month" required>
            </div>
            <div class="form-group">
                <label for="year">Ano:</label>
                <input type="number" id="year" name="year" required>
            </div>
            <div class="form-group">
                <label for="recurring">Recorrente:</label>
                <input type="checkbox" id="recurring" name="recurring">
            </div>
            <button type="submit" class="button-primary">Adicionar</button>
        </form>
    </div>
</div>
@endsection
