@extends('layout.app')

@section('body')
        <br>
        <a href="todo/create" class="btn btn-info">Add New </a>
        <div class="col-lg-6 col-lg-offset-3">
       <center> <h1>Todo List<h1></center>
        <ul class="list-group col-lg-6">
            
             @foreach($todo as $todos)
                <li class="list-group-item">
                <a href="{{'/todo/'.$todos->id}}">{{$todos->title}}</a>
              <span class="pull-right">{{$todos->created_at->diffforHumans()}}</span>
                </li>
             @endforeach     
        </ul>

        <ul class="list-group col-lg-5 ">
            
             @foreach($todo as $todos)
                <li class="list-group-item">
                <a href="{{'/todo/'.$todos->id.'/edit'}}">Edit</a>
               
               
                <form  class="pull-right" action="{{'/todo/'.$todos->id}}" method="post">
                 {{csrf_field()}} 
                {{method_field('DELETE')}}
                <button type="submit" style="border:none;">del</button>
                </form>

                </li>
             @endforeach     
        </ul>


        </div>
@endsection