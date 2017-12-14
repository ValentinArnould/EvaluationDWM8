<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Races;
use App\Dons;

class Race extends Controller
{
    public function ajouter()
    {
      $donslist = Dons::all();
      $dons = [];
      foreach ($donslist as $inne) {
        $dons[$inne->id] = $inne->nom;
      }
      return view('/Add/add-Race', ['dons' => $dons]);
    }

    public function supprimer()
    {

    }

    public function modifier()
    {

    }
}
