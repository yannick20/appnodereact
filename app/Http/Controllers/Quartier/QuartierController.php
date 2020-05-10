<?php

namespace App\Http\Controllers\Quartier;
use App\Models\QuartierModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    //
    public function Quartier(){
        return response()->json(UtilisateurModel::get(),200);
       }
       public function quartierByCodeQuartier($code_quartier){
        return response()->json(QuartierModel::find($code_quartier),200);
       }
       public function quartierSave(Request $request){
         $quartier=UtilisateurModel::create($request->all());
        return response()->json($quartier,201);
        }
     
        public function quartierUpdate(Request $request,QuartierModel $quartier){
             $quartier->update($request->all());
             return response()->json($quartier,200);     
     
        }
     
        public function quartierDelete(Request $request,QuartierModel $quartier){
         $quartier->delete;
         return response()->json($quartier,200);     
     
     }
}
