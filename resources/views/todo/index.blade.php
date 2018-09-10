@extends('layouts.app')

@section('content')
    {{--{{dd($task)}}--}}


@foreach($task as $ding)

{{ $ding->content }} {{ $ding->todo }}

@endforeach


@endsection