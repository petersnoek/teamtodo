@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Team</div>
                <div class="card-body">
                    <form action="/store/team" method="post">
                        @csrf
                        <input type="hidden" value="{{ $userId }}" name="userId">
                        <div class="form-group col-md-4">
                            <label for="Name">Team name:</label>
                            <input type="text" class="form-control" autofocus="autofocus" name="name">
                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection