<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{

public function index(){
 //return DB::table('articlez')->get(); //methode 1  
    // return article::all();   //methode appelé article
    // $articles= article::all(); //stocke le resultat du modèle dans une variable
    // $articles= article::paginate(); //permet la pagnation
     $search=request('search');

    //  $articles= article::where ('name','like',"%$search%")
    //   ->orwhere ('body','like',"%$search%")
    // ->paginate(5); 

     $articles= article::recherche($search)->paginate(5);  //une autre façon de programmer en utilisant le scope   
   //permet la pagnation

    return view('articles.index',['articles'=>$articles]);//spécifier la page view et le paramètre doit être envoyé via un tableau
    }
    public function create(){

    return view ('articles.create') ; 
    }

    public function store(){
    
    Article::create(request()->all()+['user_id'=>1]);
 
    // Article::insert([
    //  'name'=>request('name'),
    // 'body'=>request('body'),
    // 'created_at'=>request('created_at'),

    // ]);    cette façon permet de stocker mais long

    return redirect()->route('articles.index');
 }

//      public function store(){
//     $name=request('name');
//       $body=request('body');
//         $date=request('create_at');
//     article::enregistrer([$name,$body,$date]);    
//  }


public function update(){
 article:: where('id', 1)
        // ->where('destination', 'San Diego') si plusieurs tests
        //->wherenull('name')
        //->wherenotnull
        //->orwhere //cas de or
        //->where(function($q){->where ...})//pour regrouper pluseiurs champs avec and et les auters or
          ->update(['name' => 'amar']);
}

public function destory(){
 article::where ('id',1)->delete();   
}
}
