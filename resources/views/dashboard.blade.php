@extends('master')


@section('name')
    
  <!-- dashbord head -->

<section class="md:mx-20   md:my-10 mx-5 my-6 w-[40%] bg-gray-900 p-10 rounded-lg shadow-lg bg-opacity-80 shadow-gray-500">

<div>
<h1 class="text-3xl text-cyan-500 text-center">profile</h1>




</div>

  <!-- user profile -->

<div>
   <img src="/products/{{Auth::user()->image}}" alt="" class="rounded-full border-r-2 border-t-2 border-cyan-400 mt-10 mb-5 mx-auto" width="80px">

    <h1 class="text-cyan-500 text-xl mb-5 text-center">@pak.{{ Auth::user()->name }}</h1>
   <div class="grid grid-cols-3 text-center">
    <div>
        <p class="text-cyan-500">follower</p>
       <p class="text-white mb-5">1222</p>
    </div>
    <div>
        <p class="text-cyan-500">follow</p>
       <p class="text-white mb-5">1222</p>
    </div>
    <div>
        <p class="text-cyan-500">Like</p>
       <p class="text-white mb-5">1222</p>
    </div>



   </div>
    <p class="text-gray-300 text-center "> Lorem ipsum dolor orem labori Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, repellat debitis consequuntur perspiciatis excepturi reiciendis ratione similique fuga quasi? Sed, maiores. Sunt, exercitationem voluptas facere esse illo porro quas minima!osam aut unde cumque quas totam illum!</p>
    
<div class="flex  mt-5">

<button class="bg-cyan-500 text-white rounded-xl py-1 px-5 mx-1 shadow-md bg-opacity-90 shadow-gray-900" >Edite Profile</button>
<button class="bg-cyan-500 text-white rounded-xl py-1 px-5  mx-1  shadow-md bg-opacity-90 shadow-gray-900">Seting & privacy</button>


</div>
 



</section>

<hr>
<h1 class="text-center text-4xl my-5 "> Post </h1>

<section class="md:mx-20">



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
