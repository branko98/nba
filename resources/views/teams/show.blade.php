@extends('layouts.master')

@section('title')
    {{ $team->name }}
@endsection

@section('content')
    <h1>{{ $team->name }} </h1>
    <h4>Information:</h4>
    <p>
        {{ $team->email}} | {{ $team->adress }} | {{ $team->city}}

    </p>
    <h4>Players:</h4>
    <h5>
        @foreach ($team->players as $player)
         <a href="/player/{{$player->id}}">{{ $player->first_name }} {{ $player->last_name }}</a>
        @endforeach
    </h5>
@endsection