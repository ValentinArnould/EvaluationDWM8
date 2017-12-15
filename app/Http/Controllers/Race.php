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
      $race->nom = $request->nom;
      $race->description = $request->description;
      $race->habitat = $request->habitat;
      $race->dons = $request->dons;
      $race->faiblesses = $request->faiblesses;
      $race->custom = $request->custom;
      $race->save();
      return redirect('/');
    }

    public function supprimer()
    {
      $racelist = Races::all();
      $races = [];
      foreach ($racelist as $rpz) {
        $races[$rpz->id] = $rpz->nom;
      }
      return view('/Delete/delete-Race', ['races' => $races]);
    }
    public function effacer(Request $request)
    {
      $race = Races::find($request->ChoixRace);
      $race->delete();
      return redirect('/');
    }

    public function modif()
    {
      $racelist = Races::all();
      $races = [];
      foreach ($racelist as $rpz) {
        $races[$rpz->id] = $rpz->nom;
      }
      return view('/Update/update-Race', ['races' => $races]);
    }
    public function modifier()
    {
      /*$raceList = Races::all();
      var_dump($request->ChoixRace);
      foreach ($raceList as $rpz) {
        if($request->ChoixRace == 0)
        {

        }
      }*/
      $race = Races::find($request->ChoixRace);
      $race->nom = $request->nom;
      $race->description = $request->description;
      $race->habitat = $request->habitat;
      $race->dons = $request->dons;
      $race->faiblesses = $request->faiblesses;
      $race->custom = $request->custom;
      $race->save();
      return redirect('/');
    }

    public function voir()
    {
      $races = Races::all();
      return view('/Read/read-Race', compact('races'));
    }
}
