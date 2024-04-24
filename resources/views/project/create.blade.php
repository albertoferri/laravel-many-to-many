@extends('layouts.app')

@section('content')
    <div class="container py-5">

      <h1 class="mb-5">AGGIUNGI UN PROGETTO</h1>

        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine di copertina</label>
                <input type="file" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" required>
                @error('thumb')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="skill" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control @error('skill') is-invalid @enderror" id="skill" name="skill" required>
                @error('skill')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia</label>
                <select class="form-select" name="type_id" id="type_id">
                
                  <option value=""></option>
  
                  @foreach ($types as $type)
                  <option value="{{$type->id}}" {{ $type->id == old('type_id') ? 'selected' : '' }}>{{ $type->title }}</option>
                  @endforeach
  
                </select>
            </div>
        
            <div class="mb-3">
                <label for="git_url" class="form-label">Link alla repo di GitHub</label>
                <input type="text" class="form-control @error('git_url') is-invalid @enderror" id="git_url" name="git_url" required>
                @error('git_url')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary fw-bold text-uppercase">Aggiungi</button>
        </form>
        
        
    </div>
@endsection