



@foreach($teams as $team)
    @foreach($team->user as $user)
    {{ $user->id }}
    {{ $user->name }}
    @endforeach
@endforeach


