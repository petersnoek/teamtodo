@extends('layouts.app')


@section('content')

<h1>{{ $todo->name }}</h1>




<ul>
    @foreach($todo->tasks as $task)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
    <a href="/task/{{$task->id}}">{{ $task->content }}</a><a href="/delete/task/{{$task->id}}"class="float-right">x</a>
                </div>
            </div>
        </div>@endforeach
</ul>

<hr>

<div class="row justify-content-center">
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