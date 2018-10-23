@extends('layouts.app')


@section('content')
    <div class="form-group row">
        <div class="col-xs-2" id="foto">
            <h1 data-id="{{$todo->id}}" id="title">{{ $todo->name }} <img src="/imgs/pencil.png" alt="pencil" style="cursor: pointer;"></h1>
        </div>
    </div>


    <div id="task">
    @foreach($todo->tasks as $task)
                <label id="labelDone" class="customcheck"><a href="#" id="{{$task->id}}" data-id-task="{{$task->id}}" class="task-content">{{ $task->content }}</a> <img src="/imgs/pencil.png" alt="pencil" style="cursor: pointer;"><a href="/delete/task/{{$task->id}}" onclick="return confirm('Are you sure to delete?')" class="ml-5">x</a>
                    <input data-task-id="{{$task->id}}" data-task-name="{{$task->content}}" class="custom-checkbox" type="checkbox" @if(!$task->done == 0)
                        checked @endif>
                    <span class="checkmark"></span>
                </label>
    @endforeach
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="task-content-input" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" name="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="save" name="save" class="btn btn-primary" data-dismiss="modal">Save changes</button>

                </div>
            </div>
        </div>
    </div>

<hr>

<div class="row todoUsers">
    <div class="todoUser"></div>
    @foreach($todoUsers as $todoUser)
        <div class="todoUser">
            <p>{{ $todoUser->get()[0]->name }}</p>
        </div>
    @endforeach
</div>

<div class="row justify-content-center">
    <div style="margin-bottom: 20px;" class="col-md-8">
        <div class="card">
            <div class="card-header"><p style="margin: 7px 0;float: left;">Add user</p>
                <form style="float: right;" method="post" action="{{ url('store/todoUser') }}">
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

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection

