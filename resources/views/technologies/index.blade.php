@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Tutte le tecnologie</h1>

    <a href="{{route('technologies.create')}}" class="btn btn-primary fw-bold text-uppercase">crea</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Mostra</th>
            <th scope="col">Modifica</th>
          </tr>
        </thead>
        <tbody>

            
            @foreach($technologies as $technology)
            <tr style="background-color: {{$technology->color}}">
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$technology->title}}</td>
                <td>{{$technology->color}}</td>
                <td><a href="{{route('technologies.show', $technology->id)}}" class="btn btn-info fw-bold">Mostra</a></td>
                <td><a href="{{route('technologies.edit', $technology->id)}}" class="btn btn-warning fw-bold">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
      </table>

</div>

@endsection