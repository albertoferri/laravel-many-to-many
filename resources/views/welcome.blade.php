@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="jumbotron p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid px-0 py-5">
                <h1 class="display-4 fw-bold">Benvenuto!</h1>
                <p class="col-md-8 fs-4">Questa è la homepage del portfolio</p>
            </div>
            <hr class="mb-4">
            <p>Accedi alla dashboard per vedere altre informazioni.</p>
            <a class="btn btn-primary btn-lg text-uppercase fw-bold" href="{{ url('/dashboard') }}" role="button">Dashboard</a>
        </div>
    </div>

@endsection