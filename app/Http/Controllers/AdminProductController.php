<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    //

    // list all products available
    public function list(){
        $viewData = [];
        $viewData['title'] = 'Admin Products';
        $viewData['products'] = Product::all();

        return view('admin.product.list')->with('viewData',$viewData);
    }


    // add new product to the store view
    public function add(){
        $viewData = [];
        $viewData['title'] = 'Admin New Product';
        return view('admin.product.add')->with('viewData',$viewData);
    }
    // add new product to the store receive the data from the form
    public function store(Request $request)
    {
        Product::validate($request);

        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setQuantity($request->input('quantity'));
        $newProduct->save();
        
        //part about the uploading of the image to laravel storage
        if($request->hasFile('image')){
            $imageName = $newProduct->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->file('image')->getRealPath()));
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return back();

    }

    // delete a product from the store
    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }


    // edit the data of a product - view data
    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Product - MAD';
        $viewData['product'] = Product::findOrFail($id);

        return view('admin.product.edit')->with('viewData',$viewData);
    }  


    // edit the data of a product - updating the value
    public function update(Request $request,$id)
    {
        Product::validate($request);

        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));
        $product->setQuantity($request->input('quantity'));

        if($request->hasFile('image')){
            $imageName = $product->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
        }

        $product->save();
        return redirect()->route('admin.product.list');
    }
}
