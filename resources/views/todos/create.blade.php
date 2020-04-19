@extends('layout.app')
@section('content')

<h1 class="text-center">Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card card-default">
                    <div class="card-header">Create new todo</div>
                    <div class="card-body">
                        @if ($errors->any())
                           <div class="alert alert-danger">
                             <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                 <div>
                                     {{$error}}
                                 </div>
                                @endforeach
                             </ul>
                            </div> 
                        @endif
                        <form action="/store-todos" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <textarea name="description" placeholder="Description here" cols="5" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-center"  >
                                <button class="btn btn-success" type="submit">Create Todo</button>
                            </div>
                        </form>
                    </div>
        </div>


    </div>
</div>



</div>

@endsection
