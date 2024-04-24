@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>USERS CON ACCESSO ADMIN</h1>
    {{-- @dump($user) --}}

    <div class="container px-0 py-3">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME e cognome</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CREATO IL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection