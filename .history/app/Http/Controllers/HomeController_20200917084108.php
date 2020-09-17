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

    public function addProduct(){

        return view('addProduct');

    }

    public function create(){

        return 'it works';

    }


    public function store()
    {
        var_dump(request('title'));
        var_dump(request('publisher'));
        var_dump(request('releasedate'));
        var_dump(request('image'));
    }


    public function editProduct(){

        return view('editProduct');

    }

    public function deleteProduct(){

        return view('deleteProduct');

    }


}
