<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $title = 'Welcome to Home Page!';
      return view('pages.home')->with('title', $title);
    }


    public function create()
    {
      $title = 'Create new File!';
      return view('pages.create', compact('title'));
    }
}
