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
    }

    public function show()
    {
        $Products = Product::all();
        return view('home', ['Products' => $Products]);
    }

    public function create(){

        return view('addProduct');

    }



    public function store()
    {

        $product = new Product;
        
        $product->name        = request('productName');
        $product->desc        = request('productDesc');
        $product->path        = request()->file('image')->store('toPath', ['disk' => 'public']);

        $product->save();
       
        $Products = Product::all();
        return view('home', ['Products' => $Products]);

    }



    public function update()
    {


        $id                   = request('id');
        $product              = Product::where('id',$id)->first();

        dd(request()->file('image'));

        $product->name        = request('productName');
        $product->desc        = request('productDesc');
        $product->path        = request()->file('image')->store('toPath', ['disk' => 'public']);

        $product->save();
       
        $Products = Product::all();
        return view('home', ['Products' => $Products]);

    }


    public function editProduct(){

        $Products = Product::all();
        return view('editProduct', ['Products' => $Products]);

    }



    public function edit($id){

        $Product = Product::where('id',$id)->first();
        return view('edit', ['Product' => $Product]);

    }   

    public function deleteProduct(){


        $Products = Product::all();
        return view('deleteProduct', ['Products' => $Products]);

    }



    public function delete($id) {

        Product::where('id', $id)->firstorfail()->delete(); 

        $Products = Product::all();
        return view('deleteProduct', ['Products' => $Products]);

    }


}
