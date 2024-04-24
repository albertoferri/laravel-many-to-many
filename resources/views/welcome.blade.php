@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3">
    <div class="container py-5">
        
        <h1 class="display-5 fw-bold">
            PORTFOLIO
        </h1>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img class="img-fluid" src="/img/wip-removebg-preview.png" alt="">
            </div>
            
            @for ($i = 0;$i < 4; $i++)
            <div class="col-3">
                <div class="card" aria-hidden="true">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZvy0qo1bsGuhXer7YlnSokjBFAcRZ8qEYkggq6Er7hQ&s" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                      </h5>
                      <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                      </p>
                      <a class="btn btn-danger disabled placeholder col-6" aria-disabled="true"></a>
                    </div>
                </div>
            </div>   
            @endfor

        </div>
    </div>
</div>


@endsection