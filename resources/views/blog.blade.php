@extends('layouts.main')

@section('content')



<h1 class="text-center mb-3">Blog </h1>
<form class="px-96 mb-10" action="/blog">

    @if (request('category'))
    <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
            Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown"
            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
            type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700"
            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                </li>
            </ul>
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown"
                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                placeholder="Search..." name="search" value="{{ request('search') }}" required>
            <button type="submit"
                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>



@if($posts->count())

<div
    class="max-w-xl items-center p-6 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <img src="" alt="">

    <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->tittel }}<span
            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
            <a href="/blog?category={{ $posts[0]->category->slug }} ">{{ $posts[0]->category->name }}</a> </span> </h5>


    <p class="mb-2"> <a href="authors/{{ $posts[0]->user->username }} ">By: {{ $posts[0]->user->name }}</a> at: {{
        $posts[0]->created_at->diffForHumans() }} </p>
    <p class=" mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
    <a href="post/{{ $posts[0]->slug}}"
        class=" inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
</div>









<div class=" mx-20 mt-4 grid grid-cols-3 ">

    @foreach($posts->skip(1) as $post)

    {{-- skip 1 to skip the first post in the loop --}}
    <div class="grid-cols-2 mt-10">
        <div
            class="mb-10 mt-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

            <div class="p-5">
                <a href="#">
                    <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->tittel }}
                    </h5>
                </a>
                <p class="mb-2"> <a href="authors/{{ $post->user->username }} ">By: {{ $post->user->name }}</a> </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Category: <span
                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                        <a href="/blog?category={{ $post->category->slug }} ">{{ $post->category->name }}</a> </span>
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt}}</p>
                <a href="post/{{ $post->slug}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

    </div>
    @endforeach

    @else

    <p class="text-2xl">Tidak ada postingan </p>

    @endif










    @endsection