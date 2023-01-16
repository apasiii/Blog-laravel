@extends('layouts.main')

@section('content')


<div class="grid grid-cols-2 gap-4 mx-20 mt-24">
    <div class="col-start-1 col-end-3 w-[664px]">
        <h1 class="font-[poppins] text-[64px] font-bold w-[500px]">Hi, i’m April’s 
            Front end dev</h1>
        <p>On this blog I share tips and tricks, frameworks, projects, tutorials, etc
            Make sure you subscribe to get the latest updates</p>
    
            
    <form class="flex items-center">   
        <label for="simple-search" class="sr-only">Enter your email here....</label>
        <div class="relative w-full mr-3">
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email here...." required>
        </div>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Subscribe</button>
        
    </form>
    
    </div>
    
    <div class="col-end-7 col-span-2">
        <img src="img/hero.png" alt="">
    </div>

</div>


@endsection