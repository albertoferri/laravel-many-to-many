@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>DASHBOARD DI AMMINISTRAZIONE</h1>
    <a href="{{route('project.create')}}" class="btn btn-primary fw-bold text-uppercase">crea progetto</a>
    <a href="{{route('types.create')}}" class="btn btn-info fw-bold text-uppercase">crea tipologia</a>

    <div class="row row-cols-3 py-3">
        @foreach ($projects as $project)
        <div class="card mb-3">
            <img src="{{asset('storage/' . $project->thumb)}}" class="card-img-top" alt="immagine progetto">
            <div class="card-body">
              <h5 class="card-title">{{$project->name}}</h5>
              <p class="card-text">{{$project->description}}</p>
              <div class="d-flex gap-2 mb-3">
                @foreach ($project->technologies as $technology)
                <span class="badge rounded-pill" style="background-color: {{$technology->color}}">{{$technology->title}}</span>
                @endforeach
              </div>
              <a href="{{route('project.show', $project->id)}}" class="btn btn-success fw-bold text-uppercase">maggiori informazioni</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection