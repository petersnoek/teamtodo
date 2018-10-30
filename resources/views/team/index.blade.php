



@foreach($teams as $team)
    {{--{{ 'team info' }}--}}
    {{ $team->id }}
    {{ $team->name }}

    {{--@foreach($team->user as $user)--}}
        {{--<p>user info</p>--}}
        {{--{{ $user->id }}--}}
        {{--{{ $user->name }}--}}
        {{--{{ $user->email }}--}}
        {{--<p>team_id</p>--}}
        {{--{{ $user->pivot->team_id }}--}}
        {{--<p>user_id</p>--}}
        {{--{{ $user->pivot->user_id }}--}}
    {{--@endforeach--}}
@endforeach


