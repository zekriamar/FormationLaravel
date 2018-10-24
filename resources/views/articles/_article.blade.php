 {{-- <h4>{{$loop->iteration}} - {!! $article->name !!}</h4> --}}
  <h4>{{$loop->iteration}} - {!!$article->Name_formated!!}</h4> 
  <h4>{!!str_limit($article->body_formated,200,'..... <a href="#">à suivre</a> <a href="/articles/create">modifier</a> ')!!} </h4>
 {{-- <h4>{{str_limit($article->body,100,'[.......]')}} </h4> --}}
  <!-- str_limit permet la limitation d'affichage au nombre de caractère -->
 {{-- <h4>{{$article->create_at->diffForHumans()}}</h4> --}}
  <h4>la relation entre article est user : email - {!!$article->user->email!!}</h4> 

    @component('components.bouton')
    lire la suite 
    @endcomponent