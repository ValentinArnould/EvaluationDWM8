<?php

namespace App\Http\Controllers;
use App\Customs;

use Illuminate\Http\Request;

class Custom extends Controller
{
  public function ajouter()
  {
    return view('/Add/add-Custom');
  }
  public function inserer(Request $request)
  {
    $custom = new Customs();
    $custom->nom = $request->nom;
    $custom->description = $request->description;
    $custom->save();
    return redirect('/');
  }

  public function supprimer()
  {
    $customlist = Customs::all();
    $customs = [];
    foreach ($customlist as $rpz) {
      $customs[$rpz->id] = $rpz->nom;
    }
    return view('/Delete/delete-Custom', ['customs' => $customs]);
  }
  public function effacer(Request $request)
  {
    $custom = Customs::find($request->ChoixCustom);
    $custom->delete();
    return redirect('/');
  }

  public function modifier()
  {
    $customlist = Customs::all();
    $customs = [];
    foreach ($customlist as $rpz) {
      $customs[$rpz->id]["id"] = $rpz->id;
      $customs[$rpz->id]["nom"] = $rpz->nom;
    }
    return view('/Update/update-Classe', ['customs' => $customs]);
  }

  public function update(Request $request)
  {
    $custom = Customs::find($request->ChoixCustom);
    $custom->nom = $request->nom;
    $custom->description = $request->description;
    $custom->save();
    return redirect('/');
  }

  public function voir()
  {
    $customs = Customs::all();
    return view('/Read/read-Classe', compact('customs'));
  }
}
