@extends('layouts.app')


@section('content')
    <div class="form-group row">
        <div class="col-xs-2" id="foto">
            <h1 for="inputdefault" id="title">{{ $todo->name }} <img src="/imgs/pencil.png" alt="pencil" style="cursor: pointer;"></h1>
        </div>
    </div>




<ul>
    @foreach($todo->tasks as $task)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <a href="/task/{{$task->id}}">{{ $task->content }}</a><a href="/delete/task/{{$task->id}}" onclick="return confirm('Are you sure to delete?')" class="float-right">x</a>
                </div>
            </div>
        </div>
    @endforeach
</ul>

<hr>

<div class="row justify-content-center">
    <div style="margin-bottom: 20px;" class="col-md-8">
        <div class="card">
            <div class="card-header"><p style="margin: 7px 0;float: left;">Add user</p>
                <form style="float: right;" method="post" action="{{url('store/todoUser')}}">
                <form style="float: right;" method="post" action="{{url('store/todo/addUser')}}">
                    @csrf
                    <input hidden type="text" name="todo_id" value="{{ $todo->id }}">
                    <input style="width: 200px;display: inline-block;" type="text" class="form-control" name="user" placeholder="Add user...">
                    <button style="display: inline-block;" type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Add task</div>

            <div class="card-body">
                <form method="post" action="{{url('store/todo/task')}}">
                    @csrf
                    <input hidden type="text" name="todo_id" value="{{ $todo->id }}">

                    <div class="form-group col-md-4">
                        <label for="Name">Task</label>
                        <input type="text" class="form-control" name="content" placeholder="Add task...">
                    </div>
                    <div class="form-group col-md-4" style="margin-top:60px">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

