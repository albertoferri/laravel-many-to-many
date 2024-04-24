@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center pb-5">
            <h1>PROGETTI</h1>
    
            <a href="{{route('project.create')}}" class="btn btn-primary fw-bold text-uppercase">crea</a>

        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Immagine</th>
                <th scope="col">Nome</th>
                <th scope="col">Skill</th>
                <th scope="col">Tipo</th>
                <th scope="col">Repo</th>
                <th scope="col">Dettagli</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
              <tr>
                <td><img src="{{asset('storage/' . $project->thumb)}}" alt="immagine progetto" style="height: 200px;"></td>
                <td>{{$project->name}}</td>
                <td>{{$project->skill}}</td>
                <td>{{$project->type->title}}</td>
                <td><a class="btn btn-info my-2 fw-bold" href="{{$project->git_url}}">APRI REPO</a></td>
                <td><a href="{{route('project.show', $project->id)}}" class="btn btn-warning fw-bold text-uppercase my-2">Modifica</a></td>
              </tr>
              @endforeach
            </tbody>
        </table>
          
        
    </div>
@endsection