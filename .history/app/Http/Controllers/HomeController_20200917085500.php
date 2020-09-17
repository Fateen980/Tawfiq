<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

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


    public function index(){

        return view('home');
    }

    public function show()
    {
        return view('home');
    }

    public function create(){

        return view('addProduct');

    }



    public function store()
    {

        $product = new Product;
        
        $product->name        = request('name');
        $product->desc        = request('desc');
        $product->path        = request()->file('image')->store('public/images');
        $product->save();



    }


    public function editProduct(){

        return view('editProduct');

    }

    public function deleteProduct(){

        return view('deleteProduct');

    }


}
