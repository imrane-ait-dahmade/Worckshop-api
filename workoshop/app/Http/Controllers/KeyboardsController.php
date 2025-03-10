<?php

namespace App\Http\Controllers;

use App\Models\keyboard;
use Illuminate\Http\Request;

class KeyboardsController extends Controller
{
    public function index() {
        return keyboard::all();
    }
    
    public function store(Request $request) {
        return keyboard::create($request->all());
    }
    
    public function show(keyboard $product) {
        return $product;
    }
    
    public function update(Request $request, keyboard $product) {
        $product->update($request->all());
        return $product;
    }
    public function destroy(keyboard $product) {
        $product->delete();
        return response()->noContent();
    }
}
