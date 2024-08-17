{{--   @component('components.layout') es o mism que x layout--}}    
<x-layout meta-title="Blog title" meta-description="Blog description">

            

    <h1>Blog</h1>
    <a href="{{ route('posts.create') }} ">Create new post</a>
    
    @foreach ($posts as $post)
    <h2>
        <a href="{{route('posts.show', $post) }}">{{$post->title }}</a>
    </h2>
    @endforeach
</x-layout>

