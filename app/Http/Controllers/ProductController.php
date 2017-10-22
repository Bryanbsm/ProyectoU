<?php

namespace App\Http\Controllers;


use App\Product;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function index(){
        $products=Product::orderBy('id','DESC')->paginate(3);
    	return view('products.index',compact('products'));
    }



    public function create(){
        return view('products.create');
    }

public function store(ProductRequest $request){
    $product = new Product;
$product->id = $request->id;
$product->nombre = $request->nombre;
$product->precio = $request->precio;
$product->cantidad = $request->cantidad;

$product->save();


    return redirect()->route('products.index')->with('info','El producto fue guardado');
    
}



public function edit($id){
    $product = Product::find($id);
        return view('products.edit',compact('product'));
    }


public function show($id){
    $product = Product::find($id);
        return view('products.show',compact('product'));
    }



public function update(ProductRequest $request,$id){
$product = Product::find($id);
$product->id = $request->id;
$product->nombre = $request->nombre;
$product->precio = $request->precio;
$product->cantidad = $request->cantidad;

$product->save();


    return redirect()->route('products.index')->with('info','El producto fue actualizado');
    
    
}





    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
    	return back()->with('info','El producto fue eliminado');
    }





}