@extends('layouts.app')

@section('content')

    <h1>{{ $team->name }}</h1>

    <hr>


    @foreach($team->users as $user)
        <ul>
            <li>{{ $user->name }}</li>
        </ul>
    @endforeach

    <div class="row">
        <div class="col-sm-8">

        </div>
        <div class="col-sm-4">

        </div>
    </div>



@endsection
