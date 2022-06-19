@extends('layouts.master')

@section('title')
Home Page

@endsection

@section('content')

      <div class="container mt-5">
       
        @foreach($posts as $post)
        <div>
            <a href="/posts/{{$post->id}}" class="text-decoration-none"><h3> {{$post->title}}</h3> </a>
            Jan 1 ,2022 By zy4
            <p>{{$post->body}}</p>
          <div class="d-flex justify-content-end">
            
                 <a href="posts/{{$post->id}}/edit" style="margin-left:10; text-decoration:none" class="btn btn-success mr-2"> Edit </a>
                 <form action="/posts/{{$post->id}}"
                method = "POST"
                onsubmit="return confirm('Are you sure?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ms-2"> Delete</button> 

            </form>
          </div>
          </div>
        <hr>


        @endforeach    
<ul>
    @foreach($posts as $post)
    
    <br>
    @endforeach
</ul>

@endsection



