<h1> Editing List</h1>

<form action="/posts/update/{{ $posts->id }}" method="POST">
    @csrf

    <label>Post Title</label>
    <input type="text" name="title" placeholder="{{ $posts->title }}">
    <br><br>

    <label>Post Body</label>
    <textarea name="body">
        {{ $posts->body }}
    </textarea>
    <br><br>

    <button type="submit">Update</button>
</form> 