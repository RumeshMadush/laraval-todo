@extends('layout.app')

@section('body')
        <br>
        <a href="todo/create" class="btn btn-info">Add New </a>
        <div class="col-lg-4 col-lg-offset-4">
       <center> <h1>Todo List<h1></center>
        <ul class="list-group">
            
             @foreach($todo as $todos)
                <li class="list-group-item">
                {{$todos->body}}
              <span class="pull-right">{{$todos->created_at->diffforHumans()}}</span>
                </li>
             @endforeach

            
            
</ul>
        </div>
@endsection