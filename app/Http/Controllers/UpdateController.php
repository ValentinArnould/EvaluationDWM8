<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;

class UpdateController extends Controller
{
  public function index()
  {
    $cats = Cat::all();
    return view('update', ['cats' => $cats]);
  }
}
