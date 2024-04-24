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
                      <a class="btn btn-primary my-2" href="{{$project->git_url}}">APRI REPO</a><br>

                      <div class="d-flex gap-3">
                          <a href="{{route('project.edit', $project->id)}}" class="btn btn-warning fw-bold text-uppercase">modifica</a>
                          <form action="{{route('project.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            
                            <button class="btn btn-danger text-uppercase fw-bold">Elimina</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection