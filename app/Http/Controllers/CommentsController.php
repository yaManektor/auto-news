<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'com_text' => 'required|min:5'
        ]);

        $comment = new Comment();
        $comment->text = $request->input('com_text');
        $comment->article_id = $id;
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return redirect('/articles/' . $id)->with('success', 'Коментар додано');
    }
}
