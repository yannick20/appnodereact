<?php

namespace App\Http\Controllers\Utilisateur;

use App\Http\Controllers\Controller;
use App\Models\UtilisateurModel;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{ public function utilisateur(){
   return response()->json(UtilisateurModel::get(),200);
  }
  public function utilisateurByLogin($login){
   return response()->json(UtilisateurModel::find($login),200);
  }
  public function utilisateurSave(Request $request){
    $utilisateur=UtilisateurModel::create($request->all());
   return response()->json($utilisateur,201);
   }

   public function utilisateurUpdate(Request $request,UtilisateurModel $utilisateur){
        $utilisateur->update($request->all());
        return response()->json($utilisateur,200);     

   }

   public function utilisateurDelete(Request $request,UtilisateurModel $utilisateur){
    $utilisateur->delete;
    return response()->json($utilisateur,200);     

}

    //
}
