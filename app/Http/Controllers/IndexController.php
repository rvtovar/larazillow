<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index',[
            'name' => 'John Doe',
            'age' => 30,
            'email' => 'johndoes@example.com'
        ]);
    }

    public function show(){
        return inertia('Index/Show');
    }


}
