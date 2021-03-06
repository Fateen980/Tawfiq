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

        $Products = Product::all();
        return view('home', ['Products' => $Products]);

        return view('home');
    }

    public function show()
    {

        $games = Game::all();
        return view('games.index', ['games' => $games]);

        return view('home');
    }

    public function create(){

        return view('addProduct');

    }



    public function store()
    {

        $product = new Product;
        
        $product->name        = request('productName');
        $product->desc        = request('productDesc');
        $product->path        = request()->file('image')->store('public/images');
        $product->save();
        return view('home');

    }


    public function editProduct(){

        return view('editProduct');

    }

    public function deleteProduct(){

        return view('deleteProduct');

    }


}
