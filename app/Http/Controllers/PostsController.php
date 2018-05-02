<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use DB;
use Redirect;
use Session;
use Excel;
use App\Exports;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->input('s');

        $filetable = Post::where('isActive', 1)
        ->search($s)
        ->paginate(12);
        $deactivate = Post::where('isActive',0)
        ->search($s)
        ->paginate(5);
        return View('filetable.index', compact('filetable', 'deactivate', '$s'));
    }

    public function bilang()
    {
      $title = 'SMDI Library!';
      $active = Post::where('isActive', 1)->count();;
      $inActive = Post::where('isActive', 0)->count();;
      return View('pages.home', compact('active', 'inActive', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filetable.create');
    //     $isActive = isActive::where('Active',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      request()->validate([
        'sCode' => 'required',
        'sName' => 'required',
        'loc' => 'required',
        'month' => 'required',
        'day' => 'required',
        'year' => 'required',
        'pc' => 'required',
        'client' => 'required',
        'type' => 'required',
        'longhi' => 'required',
        'lati' => 'required',
        'publish_at' => 'nullable|date',
        'publish_at' => 'nullable|date',
      ]);

          $filetable = new Post;
          $filetable->Station_Code = $request->input('sCode');
          $filetable->Station_Name = $request->input('sName');
          $filetable->Location = $request->input('loc');
          $filetable->Month = $request->input('month');
          $filetable->Day = $request->input('day');
          $filetable->Year = $request->input('year');
          $filetable->Weather = $request->input('weather');
          $filetable->PC = $request->input('pc');
          $filetable->Client = $request->input('client');
          $filetable->Type = $request->input('type');
          $filetable->Longitude = $request->input('longhi');
          $filetable->Latitude = $request->input('lati');
          $active = 1;
          $filetable->isActive = $request->input('$isActive', $active);

          $filetable->save();

          return redirect('/filetable')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $filetable = Post::findOrFail($id);

      return view('layout.showModal', ['filetable' => $filetable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $filetable = Post::find($id);
      return view('filetable.edit', compact('filetable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      request()->validate([
        'sCode' => 'required',
        'sName' => 'required',
        'loc' => 'required',
        'month' => 'required',
        'day' => 'required',
        'year' => 'required',
        'pc' => 'required',
        'client' => 'required',
        'type' => 'required',
        'longhi' => 'required',
        'lati' => 'required',
        'publish_at' => 'nullable|date',
        'publish_at' => 'nullable|date',
      ]);

        $filetable = Post::find($id);
        $filetable->Station_Code = $request->input('sCode');
        $filetable->Station_Name = $request->input('sName');
        $filetable->Location = $request->input('loc');
        $filetable->Month = $request->input('month');
        $filetable->Day = $request->input('day');
        $filetable->Year = $request->input('year');
        $filetable->Weather = $request->input('weather');
        $filetable->PC = $request->input('pc');
        $filetable->Client = $request->input('client');
        $filetable->Type = $request->input('type');
        $filetable->Longitude = $request->input('longhi');
        $filetable->Latitude = $request->input('lati');
        $active = '1';
        $filetable->isActive = $request->input('$isActive', $active);
        $filetable->save();
        return redirect('/filetable')->with('success', 'Post Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



     public function destroy(Request $request, $id)
      {

        $filetable = Post::findOrFail($id);

        $active = '0';
        $filetable->isActive = $request->input('$isActive', $active);
        $filetable->save();

        return redirect('/filetable')->with('success', 'Record Successfully Deactivated!');
      }

      public function reactivate(Request $request, $id)
      {

        $filetable = Post::findOrFail($id);

        $active = '1';
        $filetable->isActive = $request->input('$isActive', $active);
        $filetable->save();

        return redirect('/filetable')->with('success', $id);
      }


      public function export()
      {
          return Excel::download(new Exports, 'smdi-library.xlsx');
      }

      public function exportSolo($id)
      {
        $data = Post::findOrFail($id);

          dd($data);

          return redirect('/filetable')->with('data', $data);

          // $excelArray = [$id]
          // return Excel::download(new Exports, 'smdi-library.xlsx');
          // return (new Exports)->forId(1)->download('invoices.xlsx');
          // return redirect('/filetable/{id}');
      }

}
