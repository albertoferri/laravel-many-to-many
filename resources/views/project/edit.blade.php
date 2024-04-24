@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">MODIFICA IL PROGETTO</h1>

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
                <input type="file" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" {{old('thumb') ?? $project->thumb}}>
                @error('thumb')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <label for="thumb" class="form-label">Skill</label>
            <div class="d-flex gap-4 mb-4 border border-1 rounded-2 p-1">          
              @foreach($technologies as $technology)
                <div class="form-check ">

                    {{-- controlliamo se sono presenti errori (stiamo probabilmente ricevendo dei parametri old() ) --}}
                    @if($errors->any())

                    {{-- se abbiamo errori e quindi old() --}}
                    <input 
                        type="checkbox" 
                        name="technologies[]"
                        value="{{$technology->id}}" 
                        class="form-check-input" 
                        id="technology-{{$technology->id}}"

                        {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}
                    > 

                    @else 
                    {{-- se non abbiamo errori e quindi old() è nullo --}}
                    <input 
                        type="checkbox" 
                        name="technologies[]"
                        value="{{$technology->id}}" 
                        class="form-check-input" 
                        id="technology-{{$technology->id}}"

                        {{ $project->technologies->contains($technology) ? 'checked' : '' }}
                    > 
                    @endif

                    <label for="technology-{{$technology->id}}" class="form-check-label">{{$technology->title}}</label>
                </div>
                @endforeach
            </div>

            <div class="mb-4">
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