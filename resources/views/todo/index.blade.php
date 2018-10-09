@extends('layouts.app')

@section('content')
    {{--{{dd($task)}}--}}
    <link href="{{ asset('css/hometodo.css') }}" rel="stylesheet">

<div class="home-lists">
    <h1>All Todos</h1>

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
</div>

<div class="home-lists">
    <h1>Your Todos</h1>

    @foreach($yourTodos as $yourTodo)

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <a href="/todo/{{$yourTodo->id}}">{{ $yourTodo->name }}</a>
                    <a href="/delete/{{$yourTodo->id}}" class="float-right">x</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
    {{--{{ $todos->links() }}--}}
    <a href="/create/todo">create new todo list</a>

@endsection 