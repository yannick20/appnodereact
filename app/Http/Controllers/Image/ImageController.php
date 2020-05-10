<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageModel;
class ImageController extends Controller
{
    //
    public function image(){
        return response()->json(ImageModel::get(),200);
       }
       public function imageByCodeImage($id_image){
        return response()->json(ImageModel::find($id_image),200);
       }
       public function imageSave(Request $request){
         $image=ImageModel::create($request->all());
        return response()->json($image,201);
        }
     
        public function imageUpdate(Request $request,ImageModel $image){
             $image->update($request->all());
             return response()->json($image,200);     
     
        }
     
        public function imageDelete(Request $request,ImageModel $image){
         $image->delete;
         return response()->json($image,200);     
     
     }
}
