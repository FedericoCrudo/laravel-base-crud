@extends('layout.app')

@section('title')
Product
@endsection

@section('content')
    <div class="card-deck mt-3 mb-3">
        @foreach($vestiti as $items)
        <div class="card">
            <img class="card-img-top" src="{{$items->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$items->nome}}</h5>
                <p class="card-text">{{$items->descrizione}}</p> 
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$items->price}} €</small>
            </div>
     
        </div>
        @endforeach
        @foreach($vestiti as $items)
        <div class="card">
            <img class="card-img-top" src="{{$items->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$items->nome}}</h5>
                <p class="card-text">{{$items->descrizione}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$items->price}} €</small>
            </div>
        </div>
        @endforeach
    </div>  
@endsection
