@extends('layouts.master')



@section('title')
 Edit Post

@endsection
@section('content')
     
        <div class="card">
            <div class="card-header">
                <h3 class=""> Edit A Post</h3>
            </div>
            <div class="card-body">
                <form action="/posts/{{ $posts->id }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <label class="form-label ">Post Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $posts->title }}">
                    @error('title')
                    <div >{{$message}}</div>
                        
                    @enderror
                    
                
                    <label  class="form-label " >Post Body</label>
                    <textarea class="form-control" name="body" placeholder="Body">
                        {{ $posts->body }}
                    </textarea>
                    @error('body')
                    <div >{{$message}}</div>
                        
                    @enderror
                        
                
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/posts" class="btn btn-danger">Cancel</a>
                           </div>
                </form> 
            </div>
        </div>
        

    
  </body>
@endsection



