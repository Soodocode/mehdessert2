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
    public function update()
    {
        return view('update');
    }
    public function edits()
    {
        return view('edits');
    }
    public function list()
    {
        return view('list');
    }
    public function products()
    {
        return view('products');
    }
    // public function admindashboard()
    // {
    //     return view('/dashboard/index');
    // }
    public function admindashboard()
    {
        return view('/dashboard/index');
    }

}
