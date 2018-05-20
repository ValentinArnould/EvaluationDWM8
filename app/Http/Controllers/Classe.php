<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Classes;
class Classe extends Controller
{
  public function ajouter()
  {
    return view('/Add/add-Classe');
  }
  public function inserer(Request $request)
  {
    $classe = new Classes();
    $classe->nom = $request->nom;
    $classe->description = $request->description;
    $classe->type = $request->type;
    $classe->save();
    return redirect('/');
  }
  public function supprimer()
  {
    $classelist = Classes::all();
    $classes = [];
    foreach ($classelist as $rpz) {
      $classes[$rpz->id] = $rpz->nom;
    }
    return view('/Delete/delete-Classe', ['classes' => $classes]);
  }
  public function effacer(Request $request)
  {
    $classe = Classes::find($request->ChoixClasse);
    $classe->delete();
    return redirect('/');
  }
  public function modifier()
  {
    $classelist = Classes::all();
    $classes = [];
    foreach ($classelist as $rpz) {
      $classes[$rpz->id]["id"] = $rpz->id;
      $classes[$rpz->id]["nom"] = $rpz->nom;
      $classes[$rpz->id]["description"] = $rpz->description;
      $classes[$rpz->id]["type"] = $rpz->type;
    }
    return view('/Update/update-Classe', ['classes' => $classes]);
  }
  public function update(Request $request)
  {
    $classe = Classes::find($request->ChoixClasse);
    $classe->nom = $request->nom;
    $classe->description = $request->description;
    $classe->type = $request->type;
    $classe->save();
    return redirect('/');
  }
  public function voir()
  {
    $classes = Classes::all();
    return view('/Read/read-Classe', compact('classes'));
  }
}
