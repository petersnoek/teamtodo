@extends('layouts.app')

@section('content')

    <h1>Your teams</h1>

        <div class="d-flex flex-row p-auto">

        @foreach($teams as $team)
            @foreach($team->users as $user)
                @if($user->pivot->user_id == $userId)
                        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">{{ $team->name }}</div>
                            <div class="card-body text-secondary">
                                <a href="/team/{{$team->id}}" class="card-title">Go to {{ $team->name }}</a>
                            </div>
                        </div>
                @endif
            @endforeach
        @endforeach
            </div>

@endsection
