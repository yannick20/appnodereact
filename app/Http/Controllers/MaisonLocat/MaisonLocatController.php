<?php

namespace App\Http\Controllers\MaisonLocat;
use App\Models\MaisonLocatModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MaisonLocatController extends Controller
{
    //
    public function maisonlocat(){
        return response()->json(MaisonLocatModel::get(),200);
       }
       public function maisonlocatById($id_maisonlocat){
        return response()->json(MaisonLocatModel::find($id_maisonlocat),200);
       }
       public function maisonlocatSave(Request $request){
         $maisonlocat=MaisonLocatModel::create($request->all());
        return response()->json($maisonlocat,201);
        }
     
        public function maisonlocatUpdate(Request $request,MaisonLocatModel $maisonlocat){
             $maisonlocat->update($request->all());
             return response()->json($maisonlocat,200);     
     
        }
     
        public function maisonlocatDelete(Request $request,MaisonLocatModel $maisonlocat){
         $maisonlocat->delete;
         return response()->json($maisonlocat,200);     
     
     }

     //
     public function byPays($query, $pays)
     {
       if ($pays) $query->where('code_pays', $pays);
     }
     
     public function byVille($query, $ville)
     {
       if ($ville) $query->where('code_ville', $ville);
     }
     
     // then 

   
   
   public function maisonlocatsearch(Request $request){
    $code_pays=$request->$code_pays;
    echo $code_pays;
    //$maisonlocat =DB::table(locat_maison)->where('code_pays',$code_pays)->get();
  //  $maisonlocat ='select * from locat_maison where code_pays= "'.$code_pays.'" ';
    //$maisonlocat =DB::select($maisonlocat);
   // return response()->json($maisonlocat,200);   

    }
}
