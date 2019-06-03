@extends('layouts.master')

@section('title')
    All teams
@endsection

@section('content')
    <ul>
        @foreach ($teams  as $team)
            <li>
            <a href="/{{ $team->id }}"> {{ $team->name }} </a> 
            </li>
        @endforeach
    </ul>
@endsection