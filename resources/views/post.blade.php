@extends('layouts.main')

@section('content')

<div class="mx-20">


    <h1 class=" mt-10 text-blue-600 text-5xl font-bold"> {{ $post->tittel }}</h1>
    {{-- menampilkan categori hasil dari relasi antar tabel post dengan category --}}
    <p class="mb-5 mt-1">By Aprils in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <p class="mb-5">{{ $post->body }}</p>




    <a href="/blog"><button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</button>
    </a>
</div>




@endsection