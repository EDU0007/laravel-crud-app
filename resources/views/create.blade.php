    @extends('templates.app')
     @section('content')
         <h1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</h1>
         <hr>
         <div class="col-8 m-auto">
                 @if(isset($errors) && count($errors) > 0)
                     <div class="alert alert-danger" role="alert">
                         @foreach($errors->all() as $erro)
                             {{$erro}}<br>
                         @endforeach
                     </div>
                 @endif
                @if(isset($book))
                         <form action="{{url("books/$book->id")}}" method="post" name="formEdit" id="formEdit" required>
                             @method('PUT')
                     @else
                         <form action="{{url('books')}}" method="post" name="formCad" id="formCad" required>
                     @endif
                 @csrf
                 <input type="text" class="form-control mt-2" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Digite o titulo"required><br>
                 <select name="id_user" class="form-control" id="id_user">
                     <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? ''}}</option>
                     @foreach($users as $user)
                         <option value="{{$user->id}}">{{$user->name}}</option>
                     @endforeach
                 </select><br>
                 <input type="text" class="form-control" name="pages" id="pages" value="{{$book->pages ?? ''}}" placeholder="pages" required><br>
                 <input type="text" class="form-control" name="price" id="price" value="{{$book->price ?? ''}}" placeholder="preco" required><br>
                 <input type="submit" value="@if(isset($book))Editar @else Cadastrar @endif"  class="btn btn-primary">
             </form>
         </div>
     @endsection
