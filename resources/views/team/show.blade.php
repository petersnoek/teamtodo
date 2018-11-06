@extends('layouts.app')

@section('content')

    <h1>{{ $team->name }}</h1> <a href="/team/settings/{{ $team->id }}"><i> Team settings </i></a>

    <hr>
    <div class="row">
        <div class="col-sm-8">
            @foreach($team->todos as $todo)
                {{ $todo->name }}
            @endforeach
        </div>
        <div class="col-sm-4">
            <h2>members</h2>
            @foreach($team->users as $user)
                    <div class="card">
                        <div class="card-body">
                            <p> {{$user->name}} </p> <a href="/delete/team/{{ $team->id }}/{{ $user->id }}"><i style="float: right">x</i></a>
                            <p> {{ $user->email }}</p>
                            <i> member since {{ $user->pivot->created_at }}</i>
                        </div>
                    </div>
            @endforeach
            <h2>Invite users</h2>

            <hr>

            <div class="col">
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                <ul  id="myUl" style="width: 300px; height: 150px; overflow: auto; list-style: none">
                    @foreach($noTeam as $user)
                        <li><a class="list-group-item" href="/add/user/team/{{$team->id}}/{{$user->id}}">{{ $user->name }}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>



@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/search.js') }}"></script>
@endsection
