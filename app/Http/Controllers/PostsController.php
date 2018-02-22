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

        $filetable = Post::where('isActive', 'Active')
        ->search($s)
        ->paginate(10);
        $deactivate = Post::where('isActive','notActive')
        ->search($s)
        ->paginate(10);
        return View('filetable.index', compact('filetable', 'deactivate', '$s'));


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
        // 'type' => 'required',
        'othersText' => 'required',
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
          // $filetable->Type = $request->type;
          $filetable->Type = $request->input('othersText');
          $filetable->Longitude = $request->input('longhi');
          $filetable->Latitude = $request->input('lati');
          $active = 'Active';
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
    public function show($ID)
    {

        // return view('layout.404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
      $filetable = Post::find($request->ID);
      $filetable->Station_Code = $request->Station_Code;
      $filetable->Station_Name = $request->Station_Name;
      $filetable->Location = $request->Location;
      $filetable->Month = $request->Month;
      $filetable->Day = $request->Day;
      $filetable->Year = $request->Year;
      $filetable->Weather = $request->Weather;
      $filetable->PC = $request->PC;
      $filetable->Client = $request->Client;
      $filetable->Type = $request->Type;
      $filetable->Longitude = $request->Longitude;
      $filetable->Latitude = $request->Latitude;
      $filetable->save();
      return response()->json($filetable);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($ID)
    // {
    //   $filetable = Post::find($ID)->update([
    //     'isActive' => 'notActive'
    //   ]);
    //
    //   return redirect('/filetable')->with('success', $ID);
    // }
    //
    // public function reactivate($ID)
    // {
    //   $filetable = Post::find($ID)->update([
    //     'isActive' => 'Active'
    //   ]);
    //
    //   return redirect('/filetable')->with('success', $ID);
    // }


  public function destroy($ID)
      {

        $filetable = Post::findOrFail($ID);
        // return $filetable;
        $filetable->update(['isActive' => 'notActive']);
        return redirect('/filetable')->with('success', $ID);
      }

      public function reactivate($ID)
      {

        $filetable = Post::findOrFail($ID);

        $filetable->update([
          'isActive' => 'Active'
        ]);

        return redirect('/filetable')->with('success', $ID);
      }

}
