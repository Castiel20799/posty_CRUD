<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
   public function index()
   {
       $posts = Posts::all();

       return view('posts.index', compact('posts'));
   }

   public function show($id)
   {
        $posts = Posts::find($id);

        return view('posts.show', compact('posts'));
   }

   public function create()
   {
    return view('posts.create');

   }

   public function store()
   {
        $posts = new Posts();

        $posts->title = request('title');
        $posts->body = request('body');
        $posts->created_at = now();
        $posts->updated_at = now();
        $posts->save();
        
        return redirect('/posts');
   }

   public function destroy($id)
   {
       Posts::destroy($id);

        return redirect('posts');
   }

   public function edit($id)
   {
        $posts = Posts::find($id);
        return view('posts.update', compact('posts'));
   }
   public function update($id) //for edit data store
   {
        $posts = Posts::find($id);
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->updated_at = now();
        $posts->save();
        
        return redirect('/posts');
   }
}
