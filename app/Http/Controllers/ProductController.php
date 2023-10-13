<?php

namespace App\Http\Controllers;
use App\Models\product; 
use Illuminate\Http\Request;

class  ProductController extends Controller
{
   public function welcome(){
    return view ('welcome');
   }

    public  function index(){
        $products=product::all();
       return view('products.products',['product'=>$products]); 
     
    }
    public  function create(){
        return view('products.create'); 
     }
     public function store(Request $request){
     
         $data=$request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'qty'=>'required', 
            'description'=>'nullable'


         ]);
       $newproduct =product::create($data);
       return redirect(route('product.index'));
     }


     public function edit(product $product ){
     return view ('products.edit',['product'=>$product]);

     }
     public function update(product $product,Request $request){
      $data=$request->validate([
        'name'=>'required',
        'price'=>'required|numeric',
        'qty'=>'required', 
        'description'=>'nullable'


     ]);
     $product->update($data); 
     return redirect(route('product.index'))->with('success','product updated sucessfully ');

 
    }

    public  function delete(product $product){

         $product->delete();

          return redirect(route('product.index'))->with('success','product updated sucessfully ');  
    }
} 