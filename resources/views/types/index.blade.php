@extends('layouts.app')

@section('content')

<div class="container py-5">

  <div class="d-flex justify-content-between align-items-center pb-4">
    <h1 class="m-0">Tutte le tipologie</h1>
    <a href="{{route('types.create')}}" class="btn btn-primary fw-bold text-uppercase h-50">crea</a>
  </div>

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
              <td><p class="m-0" style="width: 70%;">{{$type->description}}</p></td>
              <td><a href="{{route('types.show', $type->id)}}" class="btn btn-info fw-bold">Mostra</a></td>
              <td><a href="{{route('types.edit', $type->id)}}" class="btn btn-warning fw-bold">Modifica</a></td>
          </tr>
          @endforeach

      </tbody>
    </table>

</div>

@endsection