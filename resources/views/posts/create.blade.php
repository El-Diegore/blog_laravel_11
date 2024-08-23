<x-layout meta-title="Create new post" meta-description="Foem to create a new post">

    <h1>
        {{__('Create new post')}}
    </h1>
    <form method="POST" action="{{ route('posts.store') }} ">
        @csrf
        @include('posts.form')
      
        <button type="submit">{{__('Send')}}</button>
    </form>
    <a href="{{  route('posts.index') }} ">{{__('Back')}} </a>
    
    </x-layout>