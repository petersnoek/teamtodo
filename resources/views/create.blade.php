@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create todo</div>

                <div class="card-body">
                    <form method="post" action="{{url('todos')}}">
                    	@csrf
                    	<input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                    	<div class="form-group col-md-4">
							<label for="Name">Name:</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group col-md-4" style="margin-top:60px">
						<button type="submit" class="btn btn-success">Submit</button>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection