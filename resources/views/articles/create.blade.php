@extends('welcome')

@section ('mainName')

<div class="container" >

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('articles.store')}}" method="POST"> 
    @csrf
    <input type="text" name="name" class ="form-control {{ $errors->has('name') ? 'is-invalid' :'' }}" value="{{ old('name')}} " placeholder="Nom" > <br>
    <input type="date" name="published_at" class ="form-control {{ $errors->has('published_at')? 'is-invalid' :'' }}" value="{{ old('published_at')}} " placeholder="Date de publication"><br>
    <textarea name="body" class ="form-control  {{ $errors->has('body')? 'is-invalid' :'' }}" placeholder="body" > {{ old('body')}} </textarea > <br> 
    <button type="submit" class="btn btn-info" > Ajouter </button>
</form>
</div>
@endsection