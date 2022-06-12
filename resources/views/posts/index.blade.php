
<h1> Posts List</h1>

<a href="posts/create"style="margin-left:10; text-decoration:none"> Create </a>

<ul>
    @foreach($posts as $post)
    <a href="posts/show/{{$post->id}}" style="margin-left:10; text-decoration:none"> {{ $post->title }} </a>
    <a href="posts/edit/{{$post->id}}" style="margin-left:10; text-decoration:none"> Edit </a></t>
    <a href="posts/delete/{{$post->id}}" style="margin-left:10; text-decoration:none; color:red"> Delete </a>
    <br>
    @endforeach
</ul>