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