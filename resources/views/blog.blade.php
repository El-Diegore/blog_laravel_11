{{--   @component('components.layout') es o mism que x layout--}}    
<x-layout meta-title="Blog title" meta-description="Blog description">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        {{$post['title'] }}
    @endforeach
</x-layout>

