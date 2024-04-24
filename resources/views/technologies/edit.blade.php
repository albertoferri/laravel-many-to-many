@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="mb-5">MODIFICA LA TECNOLOGIA</h1>

        <form action="{{ route('technologies.update', $technology) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $technology->title}}" required>
                @error('title')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="color" class="form-label">Colore</label>
                <textarea class="form-control @error('color') is-invalid @enderror" id="color" name="color">{{old('color') ?? $technology->color}}</textarea>
                @error('color')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-info fw-bold text-uppercase">MODIFICA</button>
        </form>
        
        
    </div>
@endsection