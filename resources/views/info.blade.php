@extends('layout.app')

@section('title')
Product
@endsection

@section('content')
    <div class="card-deck mt-3 mb-3">
        <div class="card">
            <img class="card-img-top" src="{{$vestiti->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$vestiti->nome}}</h5>
                <p class="card-text">{{$vestiti->descrizione}}</p> 
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$vestiti->price}} €</small>
            </div>
            <a class="text-center"href=" {{route('dress.show',['dress'=>$vestiti->id])}}">Info</a>
        </div>
    </div>
     
@endsection
