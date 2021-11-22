<?php

namespace App\Http\Controllers;

class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function show()
    {
        return view('show');
    }
}
