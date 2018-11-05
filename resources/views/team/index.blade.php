@extends('layouts.app')

@section('content')


    @foreach($teams as $team)
        {{--{{ 'team info' }}--}}
        {{--{{ $team->id }}--}}
        {{--{{ $team->name }} <br>--}}

        {{--{{ var_dump($user) }}--}}

        @foreach($team->users as $user)
            @if($user->pivot->user_id == $userId)
                <h1>{{$team->name}}</h1>
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

@endsection

{{--@if($user->id == $gebruiker->pivot->user_id)--}}

{{--@endif--}}