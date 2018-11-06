@extends('layouts.app')

@section('content')

    <h1>{{ $team->name }}</h1>

    <hr>
    {{--{{ dd($noTeam) }}--}}
    <div class="row">
        <div class="col-sm-8">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">



            <ul id="myUl" style="width: 300px; height: 100px; overflow: auto; list-style: none">
                @foreach($noTeam as $user)
                    <li><a href="/add/user/team/{{$team->id}}/{{$user->id}}">{{ $user->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-4">
            <h2>members</h2>
            @foreach($team->users as $user)
                    <div class="card">
                        <div class="card-body">
                            <p> {{$user->name}} </p> <a href="/delete/team/{{ $team->id }}/{{ $user->id }}"><i style="float: right">x</i></a>
                            <p> {{ $user->email }}</p>
                            <i> member since {{ $user->pivot->created_at }}</i>
                            <p> Team id; {{ $user->pivot->team_id  }}</p>
                            <p> User id; {{ $user->pivot->user_id  }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>



@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/search.js') }}"></script>
@endsection
