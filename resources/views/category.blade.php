@extends('layouts.main')

@section('content')





<h1 class="mx-20 text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Post by
    Chategory {{ $title }}
</h1>


<div class=" mx-20 mt-4 grid grid-cols-3 ">


    @foreach($posts as $post)



    <div
        class="mb-10 mt-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://source.unsplash.com/random/?400x400" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{
                    $post->tittel }}
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Category: <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    <a href="/categories/{{ $post->category->slug }} ">{{ $post->category->name }}</a> </span>
            </p>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt}}</p>

        </div>
    </div>


    @endforeach














    @endsection