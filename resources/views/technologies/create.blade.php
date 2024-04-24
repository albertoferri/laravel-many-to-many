@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="mb-5">AGGIUNGI UNA TIPOLOGIA</h1>

        <form action="{{ route('technologies.store') }}" method="POST">
            @csrf


            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                @error('title')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="color" class="form-label">Colore</label>
                <textarea class="form-control @error('color') is-invalid @enderror" id="color" name="color">{{old('color')}}</textarea>
                @error('color')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
           
            <button type="submit" class="btn btn-primary fw-bold text-uppercase">Aggiungi</button>
        </form>
        
        
    </div>
@endsection