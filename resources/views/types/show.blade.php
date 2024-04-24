@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title text-capitalize">{{$type->title}}</h5>
                  <p class="card-text">{{$type->description}}</p>
                  <div class="d-flex justify-content-between">
                      <a href="{{route('types.edit', $type->id)}}" class="btn btn-warning fw-bold text-uppercase">opzioni</a>
                      <button type="button" class="btn btn-danger text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#deleteModal">
                          Elimina
                      </button>
                  </div>
                </div>
            </div>
              

            <!-- Button trigger modal -->
  
            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">ATTENTO!!!!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        Sei sicuro di voler eliminare la tipologia?
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('types.destroy', $type->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger fw-bold">Elimina</button>
                        </form>
                    </div>

                </div>
                </div>
            </div>

        </div>
    </div>
@endsection