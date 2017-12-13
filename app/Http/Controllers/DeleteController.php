<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;

class DeleteController extends Controller
{
  public function index()
  {
    $cats = Cat::all();
    return view('delete', ['cats' => $cats]);
  }
}
