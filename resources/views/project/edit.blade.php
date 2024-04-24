@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <form action="{{ route('project.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name') ?? $project->name}}">
                @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $project->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine di copertina</label>
                <input type="file" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
                @error('thumb')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="skill" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control @error('skill') is-invalid @enderror" id="skill" name="skill" value="{{old('skill') ?? $project->skill}}">
                @error('skill')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="git_url" class="form-label">Link alla repo di GitHub</label>
                <input type="text" class="form-control @error('git_url') is-invalid @enderror" id="git_url" name="git_url" value="{{old('git_url') ?? $project->git_url}}">
                @error('git_url')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-warning fw-bold text-uppercase">modifica</button>
        </form>
        
        
    </div>
@endsection