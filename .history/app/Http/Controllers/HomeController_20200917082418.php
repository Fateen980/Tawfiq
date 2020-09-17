<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addProduct(){

        return view('addProduct');

    }


    public function addProduct(){

        return view('addProduct');

    }


    public function editProduct(){

        return view('editProduct');

    }

    public function deleteProduct(){

        return view('deleteProduct');

    }


}
