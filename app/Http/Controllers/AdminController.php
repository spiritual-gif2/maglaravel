<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // index
    public function index(){
        $viewData = [];
        $viewData['title'] = 'Admin Panel';
        return view('admin.index')->with('viewData',$viewData);
    }
}
