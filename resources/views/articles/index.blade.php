@extends('welcome')

@section ('titreart')
 Zekri index article
 @endsection

@section ('css')
 <link rel="stylesheet" href="style.css">
 <style>
    @media print{
     .hidden-print{display:none}
     .full-height {height: initial!important}
     /* <ul>display:non</ul> */
    }

 </style>
 {{-- <script>	window.print() </script> --}}
 @endsection

@section ('mainName')

<button class="hidden-print" onClick="window.print()"> Print </button>

<form action="" class="form-inline">
 <input type="search" value="{{request('search')}}" class="form-control" name="search" placeholder="Recherche...">
 <button type="submit" class="btn btn-warning" > <i class="fa fa-search"></i> </button>
</form>
<h1> Liste articles </h1>

 @forelse ($articles as $article) 
 <!-- @if ($loop->first) Premier élément 
 @endif
 @if($loop->last) Dernier élément
 @endif -->
 @include('articles._article')
 @empty
  <h4>pas d'articles</h4>
 @endforelse

 <!-- {{$articles->render()}} //affichage des pages -->
 {{$articles->appends(['search'=>request('search')])->links()}} //affichage des pages seconde page

 //appends permet de garder le réseault de recherche me^me en changeant la page
 @endsection
