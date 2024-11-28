{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    {{-- <h2>Judul</h2>
    <h5>Inzaghi</h5>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum explicabo
        totam quod et adipisci deleniti iusto dolorem temporibus debitis vero
        asperiores dolore eligendi voluptates accusamus eos cum, dolorum a
        tenetur.
    </p> --}}

    <article class="mb-5">
        @foreach($posts as $post)
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h5>By : {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        @endforeach
    </article>

@endsection
