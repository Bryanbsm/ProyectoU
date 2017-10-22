<?php

namespace App\Http\Controllers;


use App\Venta;
use App\Product;

use App\Http\Requests\VentaRequest;



class VentaController extends Controller
{


function registar() {
    confirm("Se ha registrado correctamente ");
}




function eliminar() {
    confirm("Se ha eliminado correctamente ");
}




  public function index(){
        $vent=Venta::orderBy('id','DESC')->paginate(3);
    	return view('venta.index',compact('vent'));
    }


    public function create(){
        $producto =Product::all();
        return view(('venta.create'),compact('producto'));
    }

public function store(VentaRequest $request){
    $vent = new Venta;
    $vent->id = $request->id;
$vent->producto = $request->producto;
$vent->cantidad = $request->cantidad;


$vent->save();


    return redirect()->route('venta.index');
    registar();
  
    
}



public function edit($id){
    $vent = Venta::find($id);
    $producto = Product::all();
        return view('venta.edit',compact('vent','producto'));
    }


public function show($id){
    $vent = Venta::find($id);
        return view('venta.show',compact('vent'));
    }



public function update(VentaRequest $request,$id){
$vent = Venta::find($id);
   $vent->id = $request->id;
$vent->producto = $request->producto;
$vent->cantidad = $request->cantidad;
$vent->save();


    return redirect()->route('venta.index');
    
    
}





    public function destroy($id){
        $vent = Venta::find($id);
        $vent->delete();
        
    	 return redirect()->route('venta.index');
         
    }





}

