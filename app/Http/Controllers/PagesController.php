<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $title = 'SMDI Library!';
      return view('pages.home')->with('title', $title);
    }


    public function create()
    {
      $title = 'Create new File!';
      return view('filetable.create', compact('title'));
    }

    // public function edit()
    // {
    //   $title = 'Update File!';
    //   return view('filetable.edit', compact('title'));
    // }
}
