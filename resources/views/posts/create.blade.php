<h1> Creat a List</h1>

<form action="/posts/store" method="post">
    @csrf

    <label>Post Title</label>
    <input type="text" name="title" placeholder="Write title">
    <br><br>

    <label>Post Body</label>
    <textarea name="body">Write body text.</textarea>
    <br><br>

    <button type="submit">Create</button>
</form> 