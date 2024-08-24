{{--   @component('components.layout') es o mism que x layout--}}    
<x-layout meta-title="Blog title" meta-description="Blog description">

            

    <h1>Blog</h1>
    <a href="{{ route('posts.create') }} ">Create new post</a>
    
    @foreach ($posts as $post)
    <div style="display: flex; align-items: baseline">

        <h2>
            <a href="{{route('posts.show', $post) }}">{{$post->title }}</a>
        </h2>
        <a href="{{route('posts.edit', $post)}}">Edit</a>
        <form action="{{ route('posts.destroy', $post)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach
</x-layout>

