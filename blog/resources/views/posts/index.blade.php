@extends ('layout')

@section('content')
    <div class="blog-main">
        @foreach ($posts as $post)

            @include('posts.post')

        @endforeach
    </div>
    asfafa
@endsection