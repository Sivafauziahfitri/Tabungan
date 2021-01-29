<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view("index", compact('customers'));

    }
    public function store(Request $request){
        $customers = Customers::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password,
            'level' =>$request->level,

        ]);
    
        return redirect()->back();
        
    }
}
