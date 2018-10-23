 <h4>{{$loop->iteration}} - {!! $article->name !!}</h4>
  <!-- <h4>{{$loop->iteration}} - {{$article->name_formated}}</h4> -->
 <h4>{{str_limit($article->body,100,'[.......]')}} </h4>
  <!-- str_limit permet la limitation d'affichage au nombre de caractère -->
 <h4>{{$article->created_at->diffForHumans()}}</h4>

    @component('components.bouton')
    lire la suite 
    @endcomponent