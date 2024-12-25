@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    
    {{-- $post->body --}}
    {!! $post->body !!}

    <a href="/blog">Back to Posts</a>
@endsection