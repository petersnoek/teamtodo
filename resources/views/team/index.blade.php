@extends('layouts.app')

@section('content')

    <h1>Your teams</h1>

        <div class="d-flex flex-row p-auto">

        @foreach($teams as $team)
            {{--{{ 'team info' }}--}}
            {{--{{ $team->id }}--}}
            {{--{{ $team->name }} <br>--}}

            {{--{{ var_dump($user) }}--}}

            @foreach($team->users as $user)
                @if($user->pivot->user_id == $userId)
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">{{ $team->name }}</div>
                            <div class="card-body text-secondary">
                                <a href="/team/{{$team->id}}" class="card-title">Go to {{ $team->name }}</a>
                            </div>
                        </div>
                    {{--<a href="/team/{{$team->id}}">{{$team->name}}</a>--}}
                @endif

                {{--<p>user info</p>--}}
                {{--{{ $user->id }}--}}
                {{--{{ $user->name }}--}}
                {{--{{ $user->email }}--}}
                {{--<p>team_id</p>--}}
                {{--<p>pivot team id</p>--}}
                {{--{{ var_dump($user->pivot->user_id) }}--}}
                {{--{{ $user->pivot->team_id }} <br>--}}
                {{--<p>user_id</p>--}}
                {{--<p>pivot user id</p>--}}
                {{--{{ $user->pivot->user_id }} <br>--}}
            @endforeach
        @endforeach
            </div>

@endsection
