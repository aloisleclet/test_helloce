<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function delete($id)
    {
      $profile_to_delete = DB::table('profiles')->where('id', $id);

      if (!sizeof($profile_to_delete->get()))
        return redirect('/');

      $profile_to_delete->delete();

      return redirect('/');
    }
}
