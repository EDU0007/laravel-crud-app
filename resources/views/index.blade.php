    @extends('templates.app')

    @section('content')
        <h1 class="text-center">Cadastrar</h1>
        <hr>
        <div class="text-center mt-4">
            <a href="books/create">
                <button class="btn btn-success mt-4">Cadastrar</button>
            </a>
        </div>
        <br>
        <div class="col-8 m-auto">
            @csrf
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">titulo</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($book as $books)
                    @php
                        $user = $books->find($books->id)->relUsers;
                    @endphp

                <tr>
                    <th> {{$books->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>  {{$books->price}}</td>
                    <td>{{$books->title}}</td>
                    <td class="row ">
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark btn-sm m-1" >Visualizar</button>

                        </a>
                        <a href="{{url("books/$books->id/edit")}}">
                            <button class="btn btn-success btn-sm m-1">Editar</button>
                        </a>
                        <a href="{{url("books/$books->id")}}" class="js-del">
                            <button class="btn btn-danger btn-sm m-1" >Deletar</button>

                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    @endsection
