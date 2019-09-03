<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Profile;

class IndexController extends Controller
{
    public function index()
    {
      $profiles = Profile::all();
      return view('index', ['profiles' => $profiles]);
    }
}
