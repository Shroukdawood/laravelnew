<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function create(){
        return view('product.create');
       
    }
    public function store(Request $request){


    }
    public function show(string $id){

    }
    public function edit(string $id){

    }
    public function update(Request $request,string $id){

    }
    public function destroy(string $id){
        
    }


}
