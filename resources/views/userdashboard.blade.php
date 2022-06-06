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
        <li class ="hover:text-sky-700 -pr-72"><a href="{{url('viewsubscriptions')}}"><img src ="">View Subscriptions</a></li><br>
        <li class ="hover:text-sky-700 -pr-72"><a href=""><img src ="">View Payment History</a></li><br>
        <li class ="hover:text-sky-700 -pr-72"><a href=""><img src ="">Logout</a></li>
</ul>
</div>
<div class ="ml-48 -mt-72">
<h1 class=" text-xl "> Welcome Back, Adala 👋</h1>
</div>
<div class="grid grid-cols-2 gap-0 grid justify-items-center mt-6  text-sm text-slate-50  ">
<div class ="border-2  ml-72 w-3/4 h-72 bg-cyan-500 px-8 rounded-lg">
<h5 class ="uppercase pt-3  pb-4 font-bold ">User Details</h5>
<img src="">
    <ul class="list-none">
        <li>Name: Benard Adala Wanyande</li>
        <li>Class: Not Active</li>
        <li>School:Not Active</li>
        <li>Email: benard.wanyande@strathmore.edu</li>
    </ul>
    <br><br>
    <a class ="bg-amber-500 rounded  w-48 px-8 py-1.5 shadow-md hover:bg-sky-700 ml-22 text-xs"href =" ">View full Breakdown</a>
    <a class ="bg-amber-500 rounded w-48 px-8 py-1.5 shadow-md hover:bg-sky-700 ml-22 text-xs"href =" ">Edit user details</a>
</div>
<div class ="border-2 w-3/4 h-70 bg-cyan-500 px-8 rounded-lg ml-28">
    <h5 class ="uppercase pt-3 pb-4 font-bold">Account Status</h5><br><br>
    <ul class="list-none">
        <li>Account status:Premium Account</li>
        <li>Plan: Monthly</li>
    </ul>
    <br><br>
    <a class ="bg-amber-500 rounded w-40 px-3 py-1.5 shadow-md hover:bg-sky-700 ml-22 text-xs mt-96"href =" ">Activate Account</a>
    <a class ="bg-amber-500 rounded  w-40 px-4 py-1.5 shadow-md hover:bg-sky-700 ml-22 text-xs"href =" ">View Subscription</a>
    <a class ="bg-amber-500 rounded  w-40 px-2 py-1.5 shadow-md hover:bg-sky-700 ml-22 text-xs"href =" ">View Payment History</a>
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