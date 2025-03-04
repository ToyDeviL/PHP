@extends('layouts.app')

@section('title', 'Visualizar Despesas')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-card">
        <h1>Visualizar Despesas</h1>
        <table>
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Valor Total</th>
                    <th>Parcelas</th>
                    <th>Parcelas Pagas</th>
                    <th>Data de Início</th>
                    <th>Recorrente</th>
                    <th>Observações</th>
                    <th>Método de Pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->descricao }}</td>
                    <td>{{ $expense->categoria }}</td>
                    <td>{{ $expense->valor_total }}</td>
                    <td>{{ $expense->parcelas }}</td>
                    <td>{{ $expense->parcelas_pagas }}</td>
                    <td>{{ $expense->data_inicio }}</td>
                    <td>{{ $expense->recorrente ? 'Sim' : 'Não' }}</td>
                    <td>{{ $expense->observacoes }}</td>
                    <td>{{ $expense->metodo_pagamento }}</td>
                    <td>
                        <button class="button-primary modal-btn" data-modal="editExpenseModal">Editar</button>
                        <form action="{{ route('delete_expense', $expense->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('edit_expense')
@endsection
