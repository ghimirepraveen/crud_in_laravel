<?php

namespace App\Http\Controllers;
use App\Models\product; 
use Illuminate\Http\Request;

class  ProductController extends Controller
{
    public  function index(){
       return view('products.products'); 
    }
    public  function create(){
        return view('products.create'); 
     }
     public function store(Request $request){
     
         $data=$request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'qty'=>'required'
            

         ]);
       $newproduct =product::create($data);
       return redirect(route('product.index'));
     }
}