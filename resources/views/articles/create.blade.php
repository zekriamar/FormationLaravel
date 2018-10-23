@extends('welcome')

@section ('mainName')

<div class="container" >
<form action="{{route('articles.store')}}" method="POST"> 
    @csrf
    <input type="text" name="name" class ="form-control" placeholder="Nom"> <br>
    <input type="date" name="created_at" class ="form-control" placeholder="Date de publication"><br>
    <textarea name="body" class ="form-control" placeholder="body" > </textarea > <br> 
    <button type="submit" class="btn btn-info" > Ajouter </button>
</form>
</div>
@endsection