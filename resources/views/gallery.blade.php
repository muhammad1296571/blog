@extends('master')

@section('name')
    
<section class="mx-20">


    <div class="w-[40%] my-5">

<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-black border border-cyan-300 rounded-lg bg-gray-50 focus:outline-cyan-400" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-cyan-500 hover:bg-cyan-600 focus:ring-2 focus:outline-none focus:ring-non font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>

    </div>
<hr>


</section>


<!-- Modal toggle -->


<section class="md:mx-20   md:my-10 mx-5 my-6">
 

  <div class="grid grid-cols-3 gap-3 mb-3">

    @foreach ($posts as $item)
        

<div class="bg-gray-900 rounded-lg shadow-lg bg-opacity-80 shadow-gray-500 border-b-4  border-cyan-500">

<div class="img">
 



<img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/pubg-game-tournament-youtube-thumbnail-design-template-d921679c674fd3a7b5b702d580d8d3af_screen.jpg?ts=1588492177" alt="" class="rounded-lg">
<p class="text-white -mt-10 mx-5 cursor-pointer ">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
</svg>
 </p>
</div>
<hr>
<div class="text-white py-2 px-4 mb-5 mt-8">
  <p>{{$item->body}}</p>
</div>

<div class="mx-4">
  <div class="flex">
    <div>
        <a href="#">


 <img src="/products/{{$item->user->image}}" alt="" class="rounded-xl border-r-2 border-t-2 border-cyan-400  mb-5  shadow-gray-900  shadow-lg cursor-pointer" width="50px" height="50px">
        </a>

    </div>
    <div>
    <h1 class="text-cyan-500 text-md  mx-2">@pak.{{$item->user->name}}</h1>
        <p class="mx-4 -mt-1 text-gray-300 text-sm">. {{$item->user->tag}}</p>


    </div>

    
  </div>
    
    
</div>


<div class="grid grid-cols-3 py-5 text-center text-white">
  <div>
    <h1>like</h1>
    <p>1000</p>
  </div>
   <div>
    <h1>dislike</h1>
    <p>1000</p>
  </div>
   <div>
    <h1>saved</h1>
    <p>1000</p>
  </div>


</div>
</div>
    @endforeach


</div>



</section>



@endsection