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
    <hr>
    <ul>
        @foreach ($team->comments as $comment)
            <li> {{ $comment->content }} </li>
        @endforeach
    </ul>
    <h4>Post a comment</h4>
    <form method="POST" action="{{ route('comments-team', ['team_id' => $team->id, 'user_id' => Auth()->user()->id])}} ">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="content">Comment:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'content'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection