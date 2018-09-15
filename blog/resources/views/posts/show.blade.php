@extends('layout')

@section('content')

    <hr>

    <div class="blog-main">
        <h1>{{ $post->title }}</h1>

        @if (count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        {{ $post->body }}
    </div>

    <hr>

    <div class="comments">
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>
            @endforeach
        </ul>
    </div>

    <hr>

    <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" placeholder="Your comment here"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Comment</button>
        </div>
    </form>

    @include('layouts.errors')

@endsection