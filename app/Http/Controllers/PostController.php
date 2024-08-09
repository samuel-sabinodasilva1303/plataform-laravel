<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::query()->orderBy("created_at", "desc")->get());
    }

    public function getTags()
    {
        return response()->json(Post::getTagsFormatted());
    }

    public function filterByTag(Request $request)
    {
        $tag = $request->tag;

        if($tag) {
            return response()->json(Post::where('tag', $tag)->orderBy('created_at', 'desc')->get());
        }
    }

    public function list(Request $request)
    {
        $search = $request->search;

        if($search) {
            return response()->json(Post::where('title', 'like', '%'. $search .'%')->orderBy('created_at', 'desc')->get());
        }
        
        return response()->json(Post::orderBy("created_at", "desc")->get());
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:128',
            'description' => 'required|max:128',
            'content' => 'required',
            'image' => 'required',
            'tag' => 'required|max:128',
        ]);
        
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path(Post::POST_PATH), $imageName);

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $imageName,
            'tag' => $request->tag,
        ]);

        return response()->json($post);
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required|max:128',
            'description' => 'required|max:128',
            'content' => 'required',
            'image' => 'required',
            'tag' => 'required|max:128',
        ]);

        if($request->image) {
            $oldImage = $post->image;

            $imageName = time() . '.' . $request->image->extension();
            
            File::delete(public_path(Post::POST_PATH . '/' . $oldImage));

            $request->image->move(public_path(Post::POST_PATH), $imageName);

            $post->update([
                'image' => $imageName,
            ]);
        }

        return $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'tag' => $request->tag,
        ]);
    }

    public function delete(Post $post)
    {
        return $post ? $post->delete() : false;
    }
}
