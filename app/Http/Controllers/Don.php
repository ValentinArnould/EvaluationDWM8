<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Dons;
class Don extends Controller
{
  public function ajouter()
  {
    return view('/Add/add-Don');
  }
  public function inserer(Request $request)
  {
    $don = new Dons();
    $don->nom = $request->nom;
    $don->description = $request->description;
    $don->effet = $request->effet;
    if ($request->cout == "" or $request->cout == null)
    {
      $don->cout = null;
    } else {
      $don->cout = $request->cout; //tester si ne rien mettre permet une valeur null
    }
    $don->save();
    return redirect('/');
  }
  public function supprimer()
  {
    $donlist = Dons::all();
    $dons = [];
  foreach ($donlist as $rpz) {
      $dons[$rpz->id] = $rpz->nom;
    }
    return view('/Delete/delete-Don', ['dons' => $dons]);
  }
  public function effacer(Request $request)
  {
    $don = Dons::find($request->ChoixDon);
    $don->delete();
    return redirect('/');
  }
  public function modifier()
  {
    $donlist = Dons::all();
    $dons = [];
    foreach ($donlist as $rpz) {
      $dons[$rpz->id]["id"] = $rpz->id;
      $dons[$rpz->id]["nom"] = $rpz->nom;
      $dons[$rpz->id]["description"] = $rpz->description;
      $dons[$rpz->id]["effet"] = $rpz->effet;
      if ($rpz->cout == null) {
        $dons[$rpz->id]["cout"] = null;
      } else {
        $dons[$rpz->id]["cout"] = $rpz->cout; //tester si ne rien mettre permet une valeur null
      }
    }
    return view('/Update/update-Don', ['dons' => $dons]);
  }
  public function update(Request $request)
  {
    $don = Dons::find($request->ChoixDon);
//    var_dump($don->nom);
    $don->nom = $request->nom;
    $don->description = $request->description;
    $don->effet = $request->effet;
    $don->cout = $request->cout;
    $don->save();
    return redirect('/');
  }
  public function voir()
  {
    $dons = Dons::all();
    return view('/Read/read-Don', compact('dons'));
  }
}
