<?php

namespace App\Http\Controllers\Pays;
use App\Models\PaysModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    //
    public function pays(){
        return response()->json(PaysModel::get(),200);
       }
       public function paysByCodePays($code_pays){
        return response()->json(PaysModel::find($code_pays),200);
       }
       public function paysSave(Request $request){
         $pays=PaysModel::create($request->all());
        return response()->json($pays,201);
        }
     
        public function paysUpdate(Request $request,PaysModel $pays){
             $pays->update($request->all());
             return response()->json($pays,200);     
     
        }
     
        public function paysDelete(Request $request,PaysModel $pays){
         $pays->delete;
         return response()->json($pays,200);     
     
     }
}
