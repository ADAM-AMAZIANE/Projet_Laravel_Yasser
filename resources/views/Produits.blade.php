@extends('Master_page')
@section('title','Produits')

@section('content')
@include('incs.flash')
<h1 style="text-align: center;">   {{ $categorie }} books</h1>
<br>

<div style="border-radius: 100px;" class="card-container d-flex flex-row flex-wrap justify-content-center align-items-stretch text-center">
  @foreach ($products as $item)
      <div style=" width: 18rem;" class=" card m-4" >
          <img src="{{ asset('imgs/'.$item['image']) }}" alt="Image" class="img-fluid card-img-top" height="300px" width="auto">
          <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $item['nom'] }}</h5>
              <p class="card-text">{{ $item['prix'] }}DH</p>
              <p style="font-weight: bolder; background-color: rgba(225, 157, 69, 0.801);" class="btn-holder">
<a href="{{ url('cart/addc', ['id' => $item['id']]) }}" class="btn btn-block text-center text-dark" role="button">Add to cart</a>
              </p>

          </div>
      </div>
  @endforeach
</div>



@endsection

<style>
    .card img:hover{
     transform: scale(1.1)
     
    }

    .card:hover{
   background-color: grey;
   border: 2px solid black;
    }
</style>