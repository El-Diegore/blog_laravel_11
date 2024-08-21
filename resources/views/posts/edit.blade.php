<x-layout :meta-title="$post->title" :meta-description="$post->body">

    <h1>
        Edit form
    </h1>
    <form method="POST" action="{{ route('posts.update', $post) }} ">
        @csrf @method('PATCH')
        <label for="">
            {{__('Title')}}
            <input name="title" type="text" value="{{old('title', $post->title)}}">
            @error('title')
                <br>
                <small style="color: red">{{$message}} </small>
            @enderror
        </label>
        <label for="">
            {{__('Body')}}
            <textarea name="body" id="" cols="30" rows="10">{{old('body', $post->body)}}</textarea>
            @error('body')
            <br>
            <small style="color: red">{{$message}} </small>
        @enderror
        </label>
        <button type="submit">{{__('Send')}}</button>
    </form>

    <a href="{{  route('posts.index') }} ">Back</a>
    
    </x-layout>