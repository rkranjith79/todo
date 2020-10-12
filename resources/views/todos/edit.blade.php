@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center">Edit Todo<a href="{{route('todo.index')}}" class="btn btn-muted float-right">Back to list</a></div>
           
                <div class="card-body text-center">
                   <x-alert/>
                    <form method="post" action="{{route('todo.update',$todo->id)}}">
                    @csrf
                    @method('patch')
                    <input type="text" name="title" value="{{$todo['title']}}"/><BR><BR>
                    <textarea type="text" name="description" placeholder="description">{{$todo['description']}}</textarea><BR><BR>
                    @livewire('step', ['step' => $todo->steps])
                    <br>
                    <input class="btn btn-success " type="submit" value="submit">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection