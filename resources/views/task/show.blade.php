@extends('layouts.app')


@section('content')

<h1>{{ $task->content}}</h1>



<hr>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit task</div>

            <div class="card-body">
                <form method="post" action="{{url('update/task')}}">
                    @csrf

                    <input hidden type="text" name="id" value="{{ $task->id }}">
                    <input hidden type="text" name="todo" value="{{ $task->todo_id }}">

                    <div class="form-group col-md-4">
                        <label for="Name">Edit task</label>
                        <input type="text" class="form-control" name="content" value="{{ $task->content }}">
                    </div>
                    <div class="form-group col-md-4" style="margin-top:60px">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection