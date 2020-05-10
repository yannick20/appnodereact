<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testapirest', 'Api\ApiController@index');
//gestion utilisateurs
Route::get('utilisateur', 'Utilisateur\UtilisateurController@utilisateur');
Route::get('utilisateur/{login}', 'Utilisateur\UtilisateurController@utilisateurByLogin');
Route::post('utilisateur', 'Utilisateur\UtilisateurController@utilisateurSave');
Route::put('utilisateur/{utilisateur}', 'Utilisateur\UtilisateurController@utilisateurUpdate');
Route::delete('utilisateur/{utilisateur}', 'Utilisateur\UtilisateurController@utilisateurDelete');

//gestion demarcheur
Route::get('demarcheur', 'Demarcheur\DemarcheurController@demarcheur');
Route::get('demarcheur/{email}', 'Demarcheur\DemarcheurController@demarcheurByEmail');
Route::post('demarcheur', 'Demarcheur\DemarcheurController@demarcheurSave');
Route::put('demarcheur/{demarcheur}', 'Demarcheur\DemarcheurController@demarcheurUpdate');
Route::delete('demarcheur/{demarcheur}', 'Demarcheur\DemarcheurController@demarcheurDelete');

//gestion pays
Route::get('pays', 'Pays\PaysController@pays');
Route::get('pays/{code_pays}', 'Pays\PaysController@paysByCodePays');
Route::post('pays','Pays\PaysController@paysSave');
Route::put('pays/{pays}', 'Pays\PaysController@paysUpdate');
Route::delete('pays/{pays}', 'Pays\PaysController@paysDelete');

Route::get('ville', 'Ville\VilleController@ville');
Route::get('ville/{code_ville}', 'Ville\VilleController@villeByCodeVille');
Route::post('ville', 'Ville\VilleController@villeSave');
Route::put('ville/{ville}', 'Ville\VilleController@villeUpdate');
Route::delete('ville/{ville}','Ville\VilleController@villeDelete');



Route::get('quartier', 'Quartier\QuartierController@quartier');
Route::get('quartier/{code_quartier}', 'Quartier\QuartierController@quartierByCodeQuartier');
Route::post('quartier', 'Quartier\QuartierController@quartierSave');
Route::put('quartier/{quartier}', 'Quartier\QuartierController@quartierUpdate');
Route::delete('quartier/{quartier}', 'Quartier\QuartierController@quartierDelete');

//Route::get('maisonlocat', 'MaisonLocat\MaisonLocatController@maisonlocat');
Route::get('maisonlocat/{id_maison}', 'MaisonLocat\MaisonLocatController@maisonlocatByID');
Route::post('maisonlocat', 'MaisonLocat\MaisonLocatController@maisonlocatSave');
Route::put('maisonlocat/{maisonlocat}', 'MaisonLocat\MaisonLocatController@maisonlocatUpdate');  
Route::delete('maisonlocat/{maisonlocat}', 'MaisonLocat\MaisonLocatController@maisonlocatDelete');
//Route::get('maisonlocat/{code_pays}','MaisonLocat\MaisonLocatController@maisonlocatsearchbypaysbyville');



Route::get('maisonlocat/code_pays/{code_pays}','MaisonLocat\MaisonLocatController@maisonlocatsearch');


Route::get('image', 'Image\ImageController@image');
Route::get('image/id_image}', 'Image\ImageController@imageByID');
Route::post('image', 'Image\ImageController@imageSave');
Route::put('image/{image}', 'Image\ImageController@imageUpdate');
Route::delete('image/{image}', 'Image\ImageController@imageDelete');