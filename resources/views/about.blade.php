@extends('myLayout')

@section('title', 'about page')

@section('mainconent')
<h1>About Page</h1>
    <form action="/user" method="POST">
        @method('delete')

        @csrf
        <input type="text">
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection