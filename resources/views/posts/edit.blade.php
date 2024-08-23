<x-layout :meta-title="$post->title" :meta-description="$post->body">

    <h1>
        Edit form
    </h1>
    <form method="POST" action="{{ route('posts.update', $post) }} ">
        @csrf @method('PATCH')
        @include('posts.form')
        <button type="submit">{{__('Send')}}</button>
    </form>

    <a href="{{  route('posts.index') }} ">Back</a>
    
    </x-layout>