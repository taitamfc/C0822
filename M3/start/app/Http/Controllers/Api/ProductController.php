<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $items = Product::all();
        return response()->json($items,200);
    }
    public function show($id){
        $item = Product::find($id);
        return response()->json($item,200);
    }
    public function store(Request $request){
        
    }
    public function update($id,Request $request){
        
    }
    public function destroy($id){

    }
}
