<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    // index
    public function index(){
        $viewData = [];
        $viewData['title'] = 'Admin Panel';
        return view('admin.index')->with('viewData',$viewData);
    }


    
}
