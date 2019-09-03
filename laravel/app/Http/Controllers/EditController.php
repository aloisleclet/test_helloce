<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EditController extends Controller
{
    public function edit(Request $request, $id)
    {
      $profile_to_update = DB::table('profiles')->where('id', $id)->get();
      if (!sizeof($profile_to_update))
        return redirect('/'); 

      $profile = DB::table('profiles')->where('id', '=', $id)->first();
      return view('edit', ['profile' => $profile]);
    }

    public function update(Request $request, $id)
    {
      $profile_to_update = DB::table('profiles')->where('id', $id)->get();
      if (!sizeof($profile_to_update))
        return redirect('/'); 

      $validator = Validator::make($request->all(), [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'image' => 'required',
        'description' => 'required'
      ]);

      if ($validator->fails())
      {
        return redirect('/edit/'.$id)
          ->withErrors($validator)
          ->withInput();
      }

      DB::table('profiles')->where('id', $id)->update(
      [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'image' => $request->image,
        'description' => $request->description
      ]); 

      return redirect('/');
    }
}
