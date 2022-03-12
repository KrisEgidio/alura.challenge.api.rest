<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Client\Request;

class ExpenseController extends Controller
{
  
    public function index()
    {
        return Expense::all();
    }

    public function show($id)
    {
        return Expense::find($id);
    }

    public function store(Request $request)
    {
        $expense = Expense::create($request->all());

        return response()->json($expense, 201);
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());

        return response()->json($expense, 200);
    }

    public function delete(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return response()->json(null, 204);
    }



}
