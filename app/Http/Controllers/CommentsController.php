<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;

class CommentsController extends Controller
{
    public function store($teamId)
    {
        $team = Team::find($teamId);

        $this->validate(request(), Comment::STORE_RULES);

        $comment = new Comment;

        $comment->content = request('content');
        $comment->team_id = $teamId;
        $comment->user_id = Auth()->user()->id;

        $comment->save();

        return back();
    }
 
    
}
