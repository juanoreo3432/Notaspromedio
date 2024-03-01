<?php

namespace App\Http\Controllers;
use App\Models\Result;
use Illuminate\Http\Request;
class ResultController extends Controller
{
   

    public function create() {

        return view('Raizcuadratica');
       
    }

    public function store(Request $request ){
       
       $product = new Result();
       $product->nombre=$request->nombre;
       $product->num1=$request->num1; 
       $product->num2=$request->num2;
       $product->num3=$request->num3;
       
       $product->save();
       return $product;
      




       
       

    }
}