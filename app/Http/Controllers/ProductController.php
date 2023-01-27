<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ['id' => '1', 'name' => 'TV', 'description' => 'TV Description', 'image' => 'game.png', 'quantity' => 2, 'price' => '545'],
        ['id' => '2', 'name' => 'iPhone', 'description' => 'iPhone Description', 'image' => 'cabin.png', 'quantity' => 1, 'price' => '585'],
        ['id' => '3', 'name' => 'Glasses', 'description' => 'Glasses Description', 'image' => 'cake.png', 'quantity' => 5, 'price' => '985'],
        ['id' => '4', 'name' => 'Gloves', 'description' => 'Gloves Description', 'image' => 'circus.png', 'quantity' => 4, 'price' => '255'],
        ['id' => '5', 'name' => 'Game Pad', 'description' => 'Game Pad Description', 'image' => 'safe.png', 'quantity' => 0, 'price' => '7845'],
        ['id' => '6', 'name' => 'Sweat Case', 'description' => 'Sweat Case Description', 'image' => 'submarine.png', 'quantity' => 5, 'price' => '315']
    ];
    //
    public function index(){

        $viewData = [];
        $viewData['title'] = 'Products - Online Shop';
        $viewData['subtitle'] = 'Products List';
        $viewData['products'] = ProductController::$products;

        return view('product.index')->with('viewData',$viewData);
    }


    public function show($id){
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData['title'] = $product['name']." - Online Shop" ;
        $viewData['subtitle'] = $product['name']." - Product Information" ;
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }
}
