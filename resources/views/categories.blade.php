@extends('layouts.main')

@section('content')




<div class=" mx-20 mt-4 grid grid-cols-3 ">



    <div>
        <ul>
            @foreach($categories as $categori)
            <li> <a href="/categories/{{ $categori->slug }} ">{{ $categori->name }}</a> </li>
            @endforeach
        </ul>
    </div>












    @endsection