@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Tutte le tipologie</h1>

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

            
            @foreach($types as $type)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$type->title}}</td>
                <td>{{$type->description}}</td>
                <td><a href="{{route('types.show', $type->id)}}" class="btn btn-info fw-bold">Mostra</a></td>
                <td><a href="{{route('types.edit', $type->id)}}" class="btn btn-warning fw-bold">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
      </table>

</div>

@endsection