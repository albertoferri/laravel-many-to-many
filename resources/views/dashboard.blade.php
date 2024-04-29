@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <hr class="mt-5">
        <hr class="mb-3">
        <hr class="mb-5">

        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route('admin.index') }}" class="btn btn-lg btn-outline-danger fw-bold" style="width: 300px;">PROGETTI</a>
            <a href="{{ route('types.index') }}" class="btn btn-lg btn-outline-light fw-bold" style="width: 300px;">TIPOLOGIE</a>
            <a href="{{ route('technologies.index')}}" class="btn btn-lg btn-outline-warning fw-bold" style="width: 300px;">SKILL</a>
        </div>
    </div>
</div>
@endsection
