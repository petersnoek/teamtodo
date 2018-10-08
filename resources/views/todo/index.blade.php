@extends('layouts.app')

@section('content')
    {{--{{dd($task)}}--}}
<h1>Todo list</h1>

@foreach($todos as $todo)

    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <a href="/todo/{{$todo->id}}">{{ $todo->name }}</a>
                <a href="/delete/{{$todo->id}}" class="float-right">x</a>
            </div>
        </div>
    </div>
@endforeach

    {{--{{ $todos->links() }}--}}
    <a href="/create/todo">create new todo list</a>

@endsection 