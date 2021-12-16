<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $request->validate([
            'text' => 'required|max:2000',
        ]);

        $post = Post::FindOrFail($post_id);

        $comment = Comment::create([
            'text' => $request->input('text'),
            'account_id' => auth()->user()->account->id,
            'post_id' => $post_id,
        ]);

        session()->flash('message', 'Comment successfully submitted.');
        
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update([    
            'text' => $request->input('text'),
            
        ]);

        $comment->save($request->all());
        session()->flash('message', 'Comment was updated successfully.');

        return redirect()->route('posts.show', $comment->post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        session()->flash('message', 'Comment was deleted successfully.');

        return redirect()->route('posts.show', $comment->post->id);
    }
}
