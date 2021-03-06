<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{// protected $table=['articles'];//permet de spécifier le nom de la table si la table spécifié dans le nom de la fonction ne corresponda pas au nom réel de la table
    //

    protected $fillable= ['name','body','user_id','published_at'];
    //permet de spécifier les champs qui s'enregistre automatiquement à partir du formlaire
    public function getNameAttribute()
    {

    // cette fonction touche le champ Name du résultat recherhcher

        return str_replace(request('search'), '<mark>'.request('search').'</mark>', $this->attributes['name']);
    }

    public function getNameFormatedAttribute()
    {
    
    // créer une nouvelle colllonne -cette fonction
        // if (request()->has('search')){

        return str_replace(request('search'), '<mark>'.request('search').'</mark>', $this->attributes['name']);
        // }
    }
    public function getBodyFormatedAttribute()
    {

    // créer une nouvelle colllonne -cette fonction
        // if (request()->has('search')){

        return str_replace(request('search'), '<mark>'.request('search').'</mark>', $this->attributes['body']);
        // }
    }
    public function getPublished_atAttribute()
    {

    // créer une nouvelle colllonne -cette fonction
        if (is_null($this->attributes['create_at'])) {
            return Carbon::parse($this->attributes['create_at']->diffforHumans());
        }
//     if (request()->has('search')){

//    return str_replace(request('search'),'<mark>'.request('search').'</mark>',$this->Attributes['name']);
//     }
    }
    public function scopeRecherche($Query, $search)
    {
        $Query->where('articles.name', 'like', "%$search%")
            ->orwhere('body', 'like', "%$search%")
            ->leftjoin('users', 'users.id', '=', 'articles.user_id')
            ->orwhere('users.name', 'like', "%$search%")
            ->select('articles.*');//permet la recherche dans deuxième table user en meme temps et select uniquement els articles de article
    }

    public function scopeActive($Query)
    {
        $Query->where('status', 1)
            ->where('status', '<', 1)
            ->wherestatus(1);
        // les trois sont identique 'status est un
    }

    public function user()//nom quelconque
    {
        return $this->belongsTo(User::class)->withDefault();//article appartient à un user withdefault pour éviter erreur en cas pas de donnée
 //User: nom de du modèle si user_id: est donnée dans la table donc ne necessite pas un paramtère
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
