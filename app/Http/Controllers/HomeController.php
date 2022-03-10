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
        return view('home', ['title' => '- Home Page']);
    }

    public function about()
    {
        return view('about', ['title' => '- About Page']);
    }
    
    public function location()
    {
        return view('location', ['title' => '- Location Page']);
    }

    public function menu()
    {
        return view('menu', ['title' => '- Menu Page']);
    }

    public function contact()
    {
        return view('contact', ['title' => '- Contact Page']);
    }
}