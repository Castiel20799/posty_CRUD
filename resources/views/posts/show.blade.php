
@extends('layouts.master')


@section('title')
    {{ $posts->title }}
@endsection


@section('content')
<h1>Post Detail</h1>
<div class="card">
    <div class="card-body">
        <h3>{{ $posts->title }}</h3>
        <p>Post by Mg Mg on June 18, 2022</p>
        <p>{{ $posts->body }}</p>

        <a href="/posts" class="btn btn-outline-secondary">Go Home</a>
    </div>
</div>
@endsection