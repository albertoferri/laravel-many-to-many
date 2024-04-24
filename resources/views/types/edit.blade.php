@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="mb-5">MODIFICA UNA TIPOLOGIA</h1>

        <form action="{{ route('types.update', $type) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $type->title}}" required>
                @error('title')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $type->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-info fw-bold text-uppercase">MODIFICA</button>
        </form>
        
        
    </div>
@endsection