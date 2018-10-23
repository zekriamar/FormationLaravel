
<table border="1">
<tr>
<td>Nom</td>
<td>Body</td>
<td>Date_creattion</td>
</tr>

@foreach ($articles as $article) 
<tr>
<td>{{$article->name}}</td>
<td>{{$article->body}} </td>
<td>{{$article->create_at}} </td>
</tr>
@endforeach
</table>


@php
$var=10;
@endphp


@isset($var)
 variable existe
 @else
 n'existe passthru
 @endisset

 @empty ($var)
  bien rempli
  @else 
  non vide
@endempty

@if (empty($articles)) <h5> pas d'articles </h5>
@else 
 @foreach ($articles as $article) 
 <h4>{{$article->name}}</h4>
 <h4>{{$article->body}} </h4>
 <h4>{{$article->create_at}}</h4>
 @endforeach 
 @endif

<!-- {{"<script> alert('hacked') </script>"}}// ce code s'execute en tanque chanqie de caratère et s'affiche telquelle pour la sécurtié

{!!"<script> alert('hacked') </script>"!!}// ce code s'execute en tanque code mais très dangereux -->


<h1> Liste articles </h1>
@php
 $i=1
 @endphp

 @forelse ($articles as $article) 
 <h4>{{$i++}} - {{$article->name}}</h4>
 <h4>{{$article->body}} </h4>
 <h4>{{$article->create_at}}</h4>
 @empty
  <h4>pas d'articles</h4>
 @endforelse

