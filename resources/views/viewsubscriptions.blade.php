@extends('layouts.userLayout')
<html>
    
<body>

@section('content')
<div>
<div class= "border-r mt-8 ml-8">
    <h4 class="ml-4">Menu</h4>
    <br>
    <ul>
        <li class ="hover:text-sky-700 -pr-72"><a href="{{url('userdashboard')}}"><img src ="">Dashboard</a></li><br>
        <li class ="hover:text-sky-700 -pr-72"><a href=""><img src ="">Activate Account</a></li><br>
        <li class ="hover:text-sky-700 -pr-72"><a href=""><img src ="">View Subscriptions</a></li><br>
        <li class ="hover:text-sky-700 -pr-72"><a href=""><img src ="">View Payment History</a></li><br>
        <li class ="hover:text-sky-700 -pr-72"><a href=""><img src ="">Logout</a></li>
</ul>
</div>
<div class ="ml-52 -mt-72">
<h1 class=" text-xl "> Welcome Back, Adala 👋</h1>
</div>
<div class=" justify-items-center mt-6  text-sm text-slate-50  ">
<div class ="border-2  ml-96 w-1/2 h-72 bg-cyan-500 px-8 rounded-lg">
<h5 class ="uppercase pt-3 text-center  pb-4 font-bold ">Your subscription</h5><br>
<img src="">
    <ul class=" ml-16 list-none">
        <li>Sunscription type: Weekly</li>
        <li>Days left on subscription: 3</li>
        <li>Date of purchase: 27/05/2022</li>
        
    </ul>
    <br><br>
    <div class="">
    <a class ="bg-amber-500 rounded  w-48 px-8 py-1.5 shadow-md hover:bg-sky-700 ml-28 text-xs"href =" ">Make Payment</a>
    <a class ="bg-amber-500 rounded w-48 px-8 py-1.5 shadow-md hover:bg-sky-700 ml-22 text-xs"href =" ">View Payment History</a>
</div>
</div>

</div>  
<div>
<div>
    <br><br>
<a class ="bg-amber-500 rounded mt-96 w-48 px-8 py-2.5 shadow-md hover:bg-sky-700 ml-96"href ="{{url('classroom')}}">Go to E-Classroom</a>
    <a class ="bg-amber-500 rounded  w-48 px-8 py-2.5 shadow-md hover:bg-sky-700 ml-72"href =" ">Go to E-Library</a>
</div>
</div>
</div>
</div>
</div>
<br><br>




@endsection
</body>
</html>