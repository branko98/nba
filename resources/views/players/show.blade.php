@extends('layouts.master')

@section('title')
    {{ $player->first_name}} {{ $player->last_name}}
@endsection

@section('content')
    <h2>{{ $player->first_name}} {{ $player->last_name}}</h2>
    <p> Email: {{ $player->email}} </p>
    <p> Team: <a href="/{{ $player->team_id }}">{{ $player->team->name}}</a></p>
@endsection