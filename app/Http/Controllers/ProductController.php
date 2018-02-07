<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showProduct($name){
      echo $name;
    }
    public function productList(){
      $product = Product::get();
      return view('product')->with('product',$product);
    }
    public function saveProduct(Request $request){
      //dd($request->input()); buat debug
      $name = $request->get('name');
      $stock = $request->get('stock');

      $product =new Product;
      $product->name = $name;
      $product->stock = $stock;
      $product->save();

      return redirect()->action('ProductController@createProduct');
    }

    public function createProduct(){
      return view('createPage');
    }
}
