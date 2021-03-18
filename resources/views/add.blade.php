@extends('layout.app')

@section('title')
Product
@endsection

@section('content')
<div class="container ">
    <h1>Aggiungi Prodotto</h1>
<form action="{{route('dress.store')}}" method="post">
    @method('POST')
    @csrf
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="name" aria-describedby="emailHelp" placeholder="Nome...">
  </div>
  <div class="form-group">
    <label for="descrizione">Descrizione</label>
    <textarea type="text" class="form-control" id="descrizione" name="descrizione" placeholder="Descrizione..."></textarea>
  </div>
  <div class="form-group">
    <label for="price">Prezzo</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
  </div>
  <div class="form-group">
    <label for="img">IMG</label>
    <input type="text" class="form-control" id="img" name="img" placeholder="Immagine">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

     
@endsection
