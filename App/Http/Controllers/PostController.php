<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class PostController extends Controller
{
    public function index() 
    {
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "Posts",
            "post" => $post,
            "comments" => Comment::all()
        ]);
    }


    public function dataInsert(Request $request){
        $validatedData = $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
            'comment' => 'required'
        ]);
    
        Comment::create($validatedData);
    
        return redirect()->back()->with('success', 'Komentar Berhasil di tambahkan');
    }

}
