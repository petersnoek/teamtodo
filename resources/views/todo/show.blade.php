@extends('layouts.app')


@section('content')
    <div class="form-group row">
        <div class="col-xs-2" id="foto">
            <h1 data-id="{{$todo->id}}" id="title">{{ $todo->name }} <img src="/imgs/pencil.png" alt="pencil" style="cursor: pointer;"></h1>
        </div>
    </div>



    @foreach($todo->tasks as $task)
                <label id="labelDone" class="customcheck"><a href="/task/{{$task->id}}">{{ $task->content }}</a><a href="/delete/task/{{$task->id}}" onclick="return confirm('Are you sure to delete?')" class="ml-5">x</a>
                    <input data-task-id="{{$task->id}}" data-task-name="{{$task->content}}" class="custom-checkbox" type="checkbox" @if(!$task->done == 0)
                        checked @endif>
                    <span class="checkmark"></span>
                </label>
    @endforeach

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

