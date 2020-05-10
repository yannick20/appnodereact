<?php

namespace App\Http\Controllers\Maison;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaisonModel;
class MaisonController extends Controller
{
    //
    public function maison(){
        return response()->json(MaisonModel::get(),200);
       }
       public function maisonByLogin($id_maison){
        return response()->json(MaisonModel::find($id_maison),200);
       }
       public function maisonSave(Request $request){
         $maison=MaisonModel::create($request->all());
        return response()->json($maison,201);
        }
     
        public function maisonUpdate(Request $request,MaisonModel $maison){
             $maison->update($request->all());
             return response()->json($maison,200);     
     
        }
     
        public function maisonDelete(Request $request,MaisonModel $maison){
         $maison->delete;
         return response()->json($maison,200);     
     
     }
}
