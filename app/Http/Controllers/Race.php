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
        $dons[$inne->id]["nom"] = $inne->nom;
        $dons[$inne->id]["description"] = $inne->description;
        $dons[$inne->id]["effet"] = $inne->effet;
        $dons[$inne->id]["cout"] = $inne->cout;
      }
      return view('/Add/add-Race', ['dons' => $dons]);
    }
    public function inserer(Request $request)
    {
      $race = new Races();
      
    }

    public function supprimer()
    {

    }

    public function modifier()
    {

    }
}
