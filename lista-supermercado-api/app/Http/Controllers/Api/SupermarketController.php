<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supermarket;
use Illuminate\Http\Request;

class SupermarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supermarkets = Supermarket::all();
        return response()->json([
            'supermarkets' => $supermarkets
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supermarket = Supermarket::findOrFail($id);
        return response()->json([
            'supermarket' => $supermarket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
