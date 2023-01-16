@extends('layouts.main')

@section('content')




<div class="container mt-10 mx-auto ">
    <h1 class="text-3xl font-bold my-5">
        Page About
    </h1>
    <a href="#"
        class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
            src="img/<?= $image; ?>" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $name }}</h5>
            <p class=" font-normal text-gray-700 dark:text-gray-400">{{ $nrp }}</p>
            <p class=" font-normal text-gray-700 dark:text-gray-400">{{ $email }}</p>

        </div>
    </a>

</div>

@endsection