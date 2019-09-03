<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function create()
    {
      return view('create');
    }

    public function save(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'image' => 'required',
        'description' => 'required'
      ]);

      if ($validator->fails())
      {
        return redirect('/create')
          ->withErrors($validator)
          ->withInput();
      }

      DB::table('profiles')->insert(
      [
        'id' => NULL,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'image' => $request->image,
        'description' => $request->description
      ]); 
 
      return redirect('/');

    }
}
