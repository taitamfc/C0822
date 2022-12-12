<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function index(){
    //    $items = Product::all();
        $items = DB::table('products')->get();
        // select * from products
        dd($items);
    }
    public function create(){
        $categories = Category::all();
        $params = [
            'categories' => $categories
        ];
        return view('admin.products.create',$params);
    }
    public function store(StoreProductRequest $request ){
        // Validation
        // $validated = $request->validate([
        //     'name' => 'required|unique:products|max:255',
        //     'price' => 'required',
        //     'description' => 'required|min:3',
        // ],[
        //     'name.required'=> 'vui long nhap ten',
        //     'name.unique'=> 'ten da ton tai ',
        //     'name.max'=>'ten qua dai',
        //     'price.required'=>'vui long nhap gia',
        //     'description.required'=>'vui long nhap mo ta',
        //     'description.min'=> 'mo ta qua ngan'
        // ]);
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|unique:products|max:255',
        //     'price' => 'required',
        //     'description' => 'required|min:3',
        // ],[
        //     'name.required'=> 'vui long nhap ten',
        //     'name.unique'=> 'ten da ton tai ',
        //     'name.max'=>'ten qua dai',
        //     'price.required'=>'vui long nhap gia',
        //     'description.required'=>'vui long nhap mo ta',
        //     'description.min'=> 'mo ta qua ngan'
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->route('products.create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // Luu
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index');
    }
    public function show($id){
        $item = Product::find($id);
        // $item = DB::table('products')->where('id','=',$id)->first();
        //select * from products where id = 1
        dd($item);
        //http://127.0.0.1:8000/products/1
    }
    public function edit($id){

    }
    public function update(Request $request , $id){
        $product = Product::find($id);
        $product->name = 'Iphone';
        $product->price = 250000;
        $product->save();
        // thong bao

        // chuyen huong
        return redirect()->route('products.index');
    }
    public function destroy($id){

    }
}
