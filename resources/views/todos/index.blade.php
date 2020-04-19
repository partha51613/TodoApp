@extends('layout.app')
@section('content')

 

<div class="container">
    <h1 class="text-center my-5">Todos Page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Todos Header</div>
                <div class="card card-body">
                    @foreach ($todos as $todo1)
                        <ul class ="list-group"> 
                            <li class="list-group-item">
                                {{ $todo1->name }}
                                 @if (!$todo1->completed)
                                 <a href="todos/{{$todo1->id}}/complete" style="color: white" class="button btn-warning btn ml-2 float-right">Complete</a>
                                 @endif
                                <a href="todos/{{$todo1->id}}" class="button btn-primary btn float-right">View</a>
                                
                            </li>

                          
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



    
@endsection