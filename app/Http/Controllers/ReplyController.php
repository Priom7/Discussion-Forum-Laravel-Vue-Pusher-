<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\Model\Post;
use App\Model\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        //
        return ReplyResource::collection($post->replies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {
        //


        $reply = $post->replies()->create($request->all());
        return response(['reply' => new ReplyResource($reply)], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Reply $reply)
    {
        //
        return $reply;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request, Reply $reply)
    {
        //

        $reply->update($request->all());
        return response("Updated", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Reply $reply)
    {
        //
        $reply->delete();
        return response('Delete', 204);
    }
}
