<x-layout meta-title="Create new post" meta-description="Foem to create a new post">

    <h1>
        {{__('Create new post')}}
    </h1>
    <form method="POST" action="{{ route('posts.store') }} ">
        @csrf
        <label for="">
            {{__('Title')}}
            <input name="title" type="text" value="{{old('title')}}">
            @error('title')
                <br>
                <small style="color: red">{{$message}} </small>
            @enderror
        </label>
        <label for="">
            {{__('Body')}}
            <textarea name="body" id="" cols="30" rows="10">{{old('body')}}</textarea>
            @error('body')
            <br>
            <small style="color: red">{{$message}} </small>
        @enderror
        </label>
        <button type="submit">{{__('Send')}}</button>
    </form>
    <a href="{{  route('posts.index') }} ">{{__('Back')}} </a>
    
    </x-layout>