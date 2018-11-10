@extends('layouts.app')

@section('content')

     <h1>{{ $team->name }}</h1>
     <a href="#" class="btn btn-primary" id="addTodo"> Create new Todo list</a>
     <a href="/team/settings/{{ $team->id }}"><i> Team settings </i></a>

    <hr>
    <div class="row">
        <div class="col-sm-8">
            <div class="row" id="teamTodos">
                @foreach($team->todos as $todo)
                    <div class="col-sm-5">
                        <h2>{{ $todo->name }}</h2>
                        <ul class="list-group">
                            @foreach($todo->teamTasks as $task)
                                <li class="list-group-item">{{ $task->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                <div id="input">
                    <input type="hidden" value="test" placeholder="name" id="todoInput" class="form-control">
                    <input type="hidden" id="todoSubmit" data-id="{{$team->id}}" class="form-control btn btn-primary"/>
                </div>
            </div>
        </div>

        {{--All the members that are in this team--}}
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

            <hr>
            {{--Invite a member that is registered--}}
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
    <script type="text/javascript" src="{{ asset('js/team.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/teamtodo.js') }}"></script>
@endsection
