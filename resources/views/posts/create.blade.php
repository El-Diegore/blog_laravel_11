<x-layout meta-title="Create new post" meta-description="Foem to create a new post">

    <h1>
        Create new post
    </h1>
    <form method="POST" action="{{ route('posts.store') }} ">
        @csrf
        <label for="">
            Title
            <input name="title" type="text">
        </label>
        <label for="">
            Body
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </label>
        <button type="submit">Send</button>
    </form>
    <a href="{{  route('posts.index') }} ">Back</a>
    
    </x-layout>