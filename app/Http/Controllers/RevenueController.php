<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use Illuminate\Http\Client\Request;

class RevenueController extends Controller
{
    public function index()
    {
        return Revenue::all();
    }

    public function show($id)
    {
        return Revenue::find($id);
    }

    public function store(Request $request)
    {
        $revenue = Revenue::create($request->all());

        return response()->json($revenue, 201);
    }

    public function update(Request $request, $id)
    {
        $revenue = Revenue::findOrFail($id);
        $revenue->update($request->all());

        return response()->json($revenue, 200);
    }

    public function delete(Request $request, $id)
    {
        $revenue = Revenue::findOrFail($id);
        $revenue->delete();

        return response()->json(null, 204);
    }
}
