@extends('layout.app')

@section('title')
Administration
@endsection

@section('content')
    <div class="adds">
        <button type="button" class="btn btn-success"> <a class="text-white text-decoration-none"  href="{{route('dress.create')}}">Aggiungi prodotto</a></button>
        
    </div>
    <div class="container">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Operazioni</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vestiti as $items)
        <tr>
        <th scope="row">{{$items->id}}</th>
        <td>{{$items->name}}</td>
        <td>{{$items->descrizione}}</td>
        <td>
            <button class="btn btn-info"><a class="text-white text-decoration-none"href=" {{route('dress.show',['dress'=>$items->id])}}">Info</a></button>
            <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none"href=" {{route('dress.edit',['dress'=>$items->id])}}">Edit</a></button>
            <form action="{{route('dress.destroy', $items->id)}}" class="d-inline-block" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><a class="text-white text-decoration-none">Delete</a></button>       

            </form>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>

     
@endsection
