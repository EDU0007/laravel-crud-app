@extends('templates.app')
    @section('content')

        <h1 class="text-center">Visualizar</h1>
        <hr>
        <div class="text-center mt-4">
            @php
            $user = $book->find($book->id)->relUsers;
            @endphp
            <div class="card m-auto col-9">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Titulo: {{$book->title}}</li>
                    <li class="list-group-item">{{$book->price}}</li>
                    <li class="list-group-item">{{$book->pages}}</li>
                    <li class="list-group-item">{{$user->name}}</li>
                    <li class="list-group-item">{{$user->email}}</li>
                </ul>
            </div>
        </div>
    @endsection

