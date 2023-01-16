@extends('layouts.main')

@section('content')




<div class=" mx-20 mt-4 grid grid-cols-3 ">



    <div>
        <ul>
            @foreach($posts as $post)
            <li> {{ $post->user->name }} </li>
            @endforeach
        </ul>
    </div>












    @endsection