@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-10">
                <div class="card mb-3">
                    <img src="{{asset('storage/' . $project->thumb)}}" class="card-img-top" alt="immagine progetto">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->name}}</h5>
                      <p class="card-text">{{$project->description}}</p>
                      <p class="card-text">{{$project->type->title}}</p>
                      <div class="card-text d-flex gap-2 mb-3">
                        @foreach ($project->technologies as $technology)
                        <span class="badge rounded-pill" style="background-color: {{$technology->color}}">{{$technology->title}}</span>
                        @endforeach
                      </div>
                      <a class="btn btn-primary my-2" href="{{$project->git_url}}">APRI REPO</a><br>
                      <a href="{{route('project.edit', $project->id)}}" class="btn btn-warning fw-bold text-uppercase my-2">Modifica</a>
                      <button type="button" class="btn btn-danger text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Elimina
                      </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">ATTENTO!!!!!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare il progetto?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('types.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger fw-bold">Elimina</button>
                    </form>
                </div>

            </div>
            </div>
        </div>
    </div>
@endsection