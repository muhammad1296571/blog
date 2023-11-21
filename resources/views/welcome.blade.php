@extends('master')

@section('name')
<!-- hero section -->
<section class="md:mx-20 md:my-5 mx-5 my-3">
 <div class="grid md:grid-cols-2 md:gap-5 gap-2">

  <div>
    <h1 class="text-5xl my-5 text-cyan-500">welcome</h1>
    <p>let.s make it more strong our community for present our country in to the world..
      <br>and show our young telent wich is stuck for sum resion 
      <br>let.s Do this
    </p>
    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque reiciendis quis 
      <br>
      autem delectus fuga cum eum, modi doloribus atque sequi nob
      <br>
       soluta corrupti </p>
       <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque reiciendis quis 
      <br>
      autem delectus fuga cum eum, modi doloribus atque sequi nob
      <br>
       soluta corrupti </p>
       <button class="text-white bg-cyan-500 shadow-lg rounded-full shadow-cyan-500/50 px-5 py-2 font-serif  ">How to register ?</button>

  </div>

  <div>


    <img src="https://wallpaperaccess.com/full/1292474.jpg" alt="" class=" rounded-lg my-5  shadow-lg shadow-gray-500">
  </div>


 </div>
 <br>
<hr>
<!-- text card -->
<div class="my-20  p-5 bg-cyan-500 bg-opacity-30   text-black border-l-4 rounded-lg  border-cyan-500 shadow-md  shadow-cyan-500/50">
<h1 class="text-4xl  py-3">Red Must</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum cupiditate necessitatibus saepe illo eligendi exercitationem optio aut eum modi consectetur, ist
  e repellendus asperiores ipsam porro vitae voluptatum quia? Adipisci, vel?</p>
</div>

</section>


<!-- category section -->
<h1 class="text-5xl  text-cyan-500 text-center my-10">Category</h1>
<hr>

<section class="md:mx-20 md:my-5 mx-3 my-3">
  <!-- card div -->
<div class="grid md:grid-cols-3 gap-4">

<div class=" border-2 px-2 rounded-xl py-2  hover:border-l-red-500  shadow-lg  shadow-red-500/50">
  <img src="https://wallpaperaccess.com/full/1292474.jpg" alt="" class=" rounded-lg mb-3  shadow-lg shadow-gray-400">
 
  <h1 class="text-xl text-cyan-500 py-3 text-center"> <ion-icon name="logo-youtube" class="text-red-600 text-4xl -mb-2"></ion-icon> Youtube</h1>
  <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing 
    elit. Nemo, voluptates possimus? Perspiciatis totam perferendis tempora architecto quo hic nihil deserunt eius ut id. Dolorem culpa laboriosam natus maiores ea vitae.</p>
       <button class="text-white mb-4 bg-[#181823] shadow-lg rounded-md shadow-gray-500  px-5 py-2 font-serif">Check out</button>

</div>

<div class=" border-2 px-2 rounded-xl py-2  hover:border-l-blue-500  shadow-lg  shadow-blue-500/50">
  <img src="https://wallpaperaccess.com/full/1292474.jpg" alt="" class=" rounded-lg mb-3  shadow-lg shadow-gray-400">
 
  <h1 class="text-xl text-cyan-500 py-3 text-center"> <ion-icon name="logo-facebook"  class="text-blue-600 text-4xl -mb-2"></ion-icon> Facebook</h1>
  <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing 
    elit. Nemo, voluptates possimus? Perspiciatis totam perferendis tempora architecto quo hic nihil deserunt eius ut id. Dolorem culpa laboriosam natus maiores ea vitae.</p>
       <button class="text-white mb-4 bg-[#181823] shadow-lg rounded-md shadow-gray-500  px-5 py-2 font-serif">Check out</button>

</div>

<div class=" border-2 px-2 rounded-xl py-2  hover:border-l-cyan-500  shadow-lg  shadow-red-500/50">
  <img src="https://wallpaperaccess.com/full/1292474.jpg" alt="" class=" rounded-lg mb-3  shadow-lg shadow-gray-400">
 
  <h1 class="text-xl text-cyan-500 py-3 text-center"> <ion-icon name="logo-youtube" class="text-red-600 text-4xl -mb-2"></ion-icon> Youtube</h1>
  <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing 
    elit. Nemo, voluptates possimus? Perspiciatis totam perferendis tempora architecto quo hic nihil deserunt eius ut id. Dolorem culpa laboriosam natus maiores ea vitae.</p>
       <button class="text-white mb-4 bg-[#181823] shadow-lg rounded-md shadow-gray-500  px-5 py-2 font-serif">Check out</button>

</div>

</div>

</section>



<footer>
<div class="bg-gray-200 grid grid-cols-2 py-4 px-20 border-t-2 border-gray-400 mt-10 bg-opacity-70">
<div>
<h1 class="text-md"> @All Copy Right Recive</h1>

</div>

<div class="flex justify-end">
<h1 class="text-md">2021 - 2024</h1>

</div>
</div>
</footer>
@endsection
