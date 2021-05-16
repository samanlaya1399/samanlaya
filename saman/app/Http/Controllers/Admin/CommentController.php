<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->paginate(20);
        $title = 'لیست آخرین نظرات';
        return view('panel.comment.all',compact('title','comments'));
    }
    public function usaccess()
    {
        $comments = Comment::where('approved',0)->latest()->paginate(20);
        $title = 'لیست نظرات تایید نشده';

        return view('panel.comment.all',compact('title','comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $title = 'جزئیات نظر';

        return view('panel.comment.details',compact('title','comment'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Comment $comment)
    {

        $comment->update(['approved'=>1]);
        $comment->commentable()->increment('commentCount');
//        $pm = 'ok';
//        alert()->success->($pm,$pm);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Comment $comment)
    {
        $comment->commentable()->decrement('commentCount');
        $comment->delete();

        return back();
    }


    public function setApproved(Comment $comment)
    {

        $comment->update(['approved'=>1]);
        $comment->commentable()->increment('commentCount');
        return back();
    }
}
