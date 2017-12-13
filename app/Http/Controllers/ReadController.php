<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;

class ReadController extends Controller
{
  public function index()
  {
    $cats = Cat::all();
    return view('read', ['cats' => $cats]);
  }
}
