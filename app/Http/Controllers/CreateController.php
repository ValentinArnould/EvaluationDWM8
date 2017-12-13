<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;
use App\Gender;
use App\Color;


class CreateController extends Controller
{
  public function index()
  {
    $cats = Cat::all();
    $genders = Gender::all();
    $colors = Color::all();
    return view('create', ['cats' => $cats,'genders' => $genders,'colors' => $colors]);
  }
}
