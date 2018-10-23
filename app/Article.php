<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{// protected $table=['articles'];//permet de spécifier le nom de la table si la table spécifié dans le nom de la fonction ne corresponda pas au nom réel de la table
    //

 protected $fillable= ['name','body','published_at'];
//permet de spécifier les champs qui s'enregistre automatiquement à partir du formlaire
 public function getNameAttribute() {

    // cette fonction touche le champ Name du résultat recherhcher

   return str_replace(request('search'),'<mark>'.request('search').'</mark>', $this->attributes['name']);
 }

  public function getNameFormatedAttribute() {

    // créer une nouvelle colllonne -cette fonction 
    // if (request()->has('search')){

   return str_replace(request('search'),'<mark>'.request('search').'</mark>',$this->attributes['name']);
    // }
 }
   public function getBodyFormatedAttribute() {

    // créer une nouvelle colllonne -cette fonction 
    // if (request()->has('search')){

   return str_replace(request('search'),'<mark>'.request('search').'</mark>',$this->attributes['body']);
    // }
 }
  public function getPublished_atAttribute() {

    // créer une nouvelle colllonne -cette fonction 
    return Carbon::parse($this->attributes['create_at'])->diffforHumans();
//     if (request()->has('search')){

//    return str_replace(request('search'),'<mark>'.request('search').'</mark>',$this->Attributes['name']);
//     }
 }
  public function scopeRecherche($Query, $search) {

      $Query->where ('name','like',"%$search%")
            ->orwhere ('body','like',"%$search%");
 }

   public function scopeActive($Query) {

      $Query->where ('status',1)
            ->where ('status','<',1)
            ->wherestatus (1);
           // les trois sont identique 'status est un
 }

// explode('.','1998.24')[0]//permet de récuper la partie entière
// explode('.','1998.24')[1]//permet de récuper la partie décimal

//   public function enregistrer($arr) {
//     article->name=$arr[0];
//     article->body=$arr[1];
//     article->created_at=$arr[2];  
//      article->save;
//  }

}
