<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

   public function store(Request $request)
   {
     // $this->myValidate($request);
     $validator = validator :: make($request ->all(),[
          'title' => 'required',
          'body' => 'required'
     ]);
     if($validator ->fails())
     {
          return redirect('/posts/create')->withErrors($validator)->withInput();
     }

        $posts = new Posts();

        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->created_at = now();
        $posts->updated_at = now();
        $posts->save();
        
        return redirect('/posts');
   }

   public function destroy($id)
   {
     //   Posts::destroy($id);

     $post = Posts::find($id);
     $post->delete();

        return redirect('posts');
   }

   public function edit($id)
   {
        $posts = Posts::find($id);
        return view('posts.update', compact('posts'));
   }
   public function update(Request $request,$id) //for edit data store
   {
     //$this->myValidate($request);

        $post = Posts::find($id);
        $post->title = $request->title;
         $post->body = $request->body;
        $post->updated_at = now();
        $post->save();
        
        return redirect('/posts');
   }
   public function myValidate($request)
   {   
   $request-> validate([
          'title' => 'required',
          'body' => 'required'
     ],
     [
          'title.required' => "please add header",
          'body.required' => "please add body",
          'body.min' => "put at least 5"
   ]);
}
}
