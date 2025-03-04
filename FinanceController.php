<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    public function addExpense(Request $request)
    {
        DB::table('contas')->insert([
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'valor_total' => $request->valor_total,
            'parcelas' => $request->parcelas,
            'parcelas_pagas' => $request->parcelas_pagas,
            'data_inicio' => $request->data_inicio,
            'recorrente' => $request->recorrente ? 1 : 0,
            'observacoes' => $request->observacoes,
            'metodo_pagamento' => $request->metodo_pagamento,
        ]);

        return redirect()->route('view_expenses');
    }

    public function viewExpenses()
    {
        $expenses = DB::table('contas')->get();
        return view('view_expenses', compact('expenses'));
    }

    public function deleteExpense($id)
    {
        DB::table('contas')->where('id', $id)->delete();
        return redirect()->route('view_expenses');
    }

    public function addIncome(Request $request)
    {
        DB::table('incomes')->insert([
            'amount' => $request->amount,
            'income_type' => $request->income_type,
            'description' => $request->description,
            'month' => $request->month,
            'year' => $request->year,
            'recurring' => $request->recurring ? 1 : 0,
        ]);

        return redirect()->route('view_incomes');
    }

    public function viewIncomes()
    {
        $incomes = DB::table('incomes')->get();
        return view('view_incomes', compact('incomes'));
    }

    public function deleteIncome($id)
    {
        DB::table('incomes')->where('id', $id)->delete();
        return redirect()->route('view_incomes');
    }
}
