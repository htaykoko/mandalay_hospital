<?php

namespace App\Http\Controllers;

use App\Doctor;
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
        // $this->middleware('auth');
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

    public function about()
    {
        return view('about');
    }

    public function doctors()
    {
        $doctors = Doctor::all();
        return view('doctors', compact('doctors'));
    }

    public function services()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function appointment()
    {
        return view('appointments');
    }

    public function history()
    {
        return view('history');
    }
}
