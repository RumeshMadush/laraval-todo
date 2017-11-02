@extends('layout.app')

@section('body')
       <br>
        <a href="/todo" class="btn btn-info">Back</a>
       <div class="col-lg-4 col-lg-offset-4"> 
       <center><h1> Create new Item </h1></center> 


       <form class="form-horizontal" action="/todo" method="post">
            {{csrf_field()}}
            <fieldset> 
                <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label"></label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="body" rows="5" id="textArea"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </div>
            </fieldset>
        </form>
         
        @if(count($errors)>0)
            <div class="alert alert-warning">
           @foreach($errors->all() as $error)
             {{$error}}
            @endforeach
            </div>
        @endif
        
                </div>
@endsection