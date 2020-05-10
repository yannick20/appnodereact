<?php

namespace App\Http\Controllers\Demarcheur;
use App\Models\DemarcheurModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemarcheurController extends Controller
{
    //
    public function demarcheur(){
        return response()->json(DemarcheurModel::get(),200);
       }
       public function demarcheurByLogin($email){
        return response()->json(DemarcheurModel::find($email),200);
       }
       public function demarcheurSave(Request $request){
         $demarcheur=DemarcheurModel::create($request->all());
        return response()->json($demarcheur,201);
        }
     
        public function demarcheurUpdate(Request $request,DemarcheurModel $demarcheur){
             $demarcheur->update($request->all());
             return response()->json($demarcheur,200);     
     
        }
     
        public function demarcheurDelete(Request $request,DemarcheurModel $demarcheur){
         $demarcheur->delete;
         return response()->json($demarcheur,200);     
     
     }
}
