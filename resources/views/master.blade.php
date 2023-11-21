
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>
<header class="bg-opacity-20 border-b border-gray-200 sticky top-0 z-10 bg-white backdrop-filter backdrop-blur-lg firefox:bg-opacity-90">
<nav class="flex justify-between items-center w-[92%] mx-auto" >
<div>
  <img src="https://img.icons8.com/?size=1x&id=oFJj30TOI1Ha&format=png" class="w-16" alt="">
</div>
<div class="nav-links md:static  absolute md:min-h-fit mini-h-[60vh] left-0 top-[100%] md:w-auto w-full flex items-center px-5 ">
  <ul class="flex  md:items-center gap-10 md:flex-row flex-col md:text-black text-dark text-xl font-mono">
    <li class="hover:border-b-2 hover:text-cyan-500 hover:text-xl hover:border-red-500 "><a href="/">Home</a></li>
    <li class="hover:border-b-2 hover:text-cyan-500 hover:text-xl hover:border-red-500 "><a href="#">Event</a></li>
    <li class="hover:border-b-2 hover:text-cyan-500 hover:text-xl hover:border-red-500 "><a href="{{route('gallery')}}">Post</a></li>
    <li class="hover:border-b-2 hover:text-cyan-500 hover:text-xl hover:border-red-500 "><a href="#">Story</a></li>
    <li class="hover:border-b-2 hover:text-cyan-500 hover:text-xl hover:border-red-500 "><a href="#">Pubg</a></li>

  </ul>

</div>
@guest
    <div class="flex items-center  md:gap-2 gap-3">
    <a href="{{route('login')}}">   <button class="bg-[#2C3333] rounded text-white px-5 py-1 font-bold shadow-lg  shadow-gray-400">Login</button></a>
    <a href="{{route('register')}}">        <button class="bg-[#2C3333] rounded text-white px-5 py-1 font-bold  shadow-lg  shadow-gray-400">Sign</button></a>
    <ion-icon name="menu" class="text-[#2C3333]  text-3xl cursor-pointer md:hidden" onclick="onToggleMenu(this)"></ion-icon>
  </div>

@endguest
@auth
    <div class="flex items-center  md:gap-2 gap-3">
          <a href="{{route('dashboard')}}">        <button class="bg-cyan-500 rounded text-white px-5 py-1 font-bold  shadow-lg  shadow-gray-400">Dashboard</button></a>
                    <a href="{{route('profile.edit')}}">        <button class="bg-cyan-500 rounded text-white px-5 py-1 font-bold  shadow-lg  shadow-gray-400">profile</button></a>

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <button class="bg-[#2C3333] rounded text-white px-5 py-1 font-bold  shadow-lg  shadow-gray-400">logout</button></a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>  </div>
@endauth

  
  
</nav>

</header>
<style>
  h1 {font-family: "Audiowide", sans-serif;}
h2 {font-family: "Sofia", sans-serif;}
p {font-family: "Trirong", serif;}
</style>



    @yield('name')
    <script>
      const navlinks  = document.querySelector('.nav-links')
      function onToggleMenu(e){
        
        e.name = e.name === 'menu' ? 'close' :'menu'

        navlinks.ClassList.toggle('top-[9%]')
      }
    </script>
    
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>
