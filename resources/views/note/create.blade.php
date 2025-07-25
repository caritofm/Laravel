@extends('layouts.landing')

@section('content')
<a href="{{route('note.index')}}">Back</a>
<form action="{{route('note.store')}}" method="POST">
    
    @csrf 
    <label for="">Titulo</label>
    <input type="text" name="title">
    @error('title')
        <p style="color: red">{{$message}}</p>
        
    @enderror

    <label for="">Description:</label>
    <input type="text" name="description">
    @error('description')
        <p style="color: red">{{$message}}</p>
        
    @enderror

    <input type="submit" value="Create">
</form>
@endsection