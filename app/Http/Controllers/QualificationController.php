<?php

namespace App\Http\Controllers;
use App\Models\Qualification;
use Illuminate\Http\Request;
class QualificationController extends Controller
{
   

    public function create() {

        return view('NotasPromedio');
       
    }

    public function store(Request $request ){
       
       $product = new Qualification();
       $product->nombre=$request->nombre;
       $product->num1=$request->num1; 
       $product->num2=$request->num2;
       $product->num3=$request->num3;
       $promedio=(number_format($request->num1+$request->num2+$request->num3)/3);
       $product->promedio = number_format($promedio, 2);
       $product->save();
       return $product;
      




       
       

    }



}
