@extends('layouts.app')

@section('title', 'Visualizar Receitas')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-card">
        <h1>Visualizar Receitas</h1>
        <table>
            <thead>
                <tr>
                    <th>Valor</th>
                    <th>Tipo de Receita</th>
                    <th>Descrição</th>
                    <th>Mês</th>
                    <th>Ano</th>
                    <th>Recorrente</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incomes as $income)
                <tr>
                    <td>{{ $income->amount }}</td>
                    <td>{{ $income->income_type }}</td>
                    <td>{{ $income->description }}</td>
                    <td>{{ $income->month }}</td>
                    <td>{{ $income->year }}</td>
                    <td>{{ $income->recurring ? 'Sim' : 'Não' }}</td>
                    <td>
                        <form action="{{ route('delete_income', $income->id) }}" method="POST">
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
@endsection
