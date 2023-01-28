<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    // index method
    public function index(){
        $viewData = [];
        $viewData["title"] = "Home Page - Online Shop";
        $viewData['products'] = Product::all();
        return view('home.index')->with('viewData',$viewData);
        
    }

    public function about(){
        $viewData = [];
        $viewData["title"] = "About us - Online Shop";
        $viewData["subtitle"] = "About us";
        $viewData["author"] = "Ahmed Djemil MOUSSA";
        return view('home.about')->with('viewData', $viewData);
    }
}