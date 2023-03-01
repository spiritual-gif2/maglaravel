<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    //
    public function index(){

        $viewData = [];
        $viewData['title'] = 'Products - Online Shop';
        $viewData['subtitle'] = 'Products List';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData',$viewData);
    }


    public function show($id){
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName()." - Online Shop" ;
        $viewData['subtitle'] = $product->getName()." - Product Information" ;
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }
}
