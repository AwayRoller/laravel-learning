<div class="blog-post">
    <h2>
        <a href="/posts/ {{ $post->id }} ">
            {{ $post->title }}
        </a>
    </h2>
    <p>
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>
</div>


<p>
    {{ $post->body }}
</p>