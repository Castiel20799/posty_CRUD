@extends('layouts.master')



@section('title')
 Create Post

@endsection
@section('content')

     
        <div class="card">
            <div class="card-header">
                <h3> Create a Post</h3>
            </div>
            <div class="card-body">
                <form action="/posts" method="post">
   
                    @csrf
                
                    <div>
                        <label class="form-label">Post Title</label>
                
                    <input class="form-control @error('title')is-invalid @enderror" type="text" name="title" placeholder="Write title" value="{{old('title')}}">
                    @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <br><br>
                    </div>
                
                   <div class="mb-3">
                    <label class="form-label">Post Body</label>
                    <textarea class="form-control  @error('body')is-invalid @enderror" type="text" name="body" placeholder="Write body" value="{{old('body')}}" rows="5"></textarea>
                    @error('body')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <br><br> 
                   </div>
                   <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="/posts" class="btn btn-danger">Cancel</a>
                   </div>
                    
                </form> 
            </div>
        </div>
        

      
  </body>

    @endsection  
       
      

