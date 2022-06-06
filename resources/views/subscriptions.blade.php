@extends('layouts.userLayout')
<html>
    
<body>

@section('content')


<div class ="px-32 h-105 ">
    <div>
<h3 class ="pt-4 text-l text-center font-semibold "> We offer the following packages to any users who wish to purchase our premium membership</h3>
<div class="grid grid-cols-3 gap-0 grid justify-items-center mt-6 text-xs -ml-16 text-slate-50 text-center  ">
<div class ="border-2 w-52 h-48 bg-cyan-500 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-slate-50">Weekly</h5>
<p><span class ="-ml-20">Ksh</span><br><span class ="font-bold text-lg">50</span><span>/week</span><br><br>This plan allows users to conveniently purchase a subscription on a weekly basis</p>
</div>
<div class ="border-2 w-52 h-48 bg-cyan-500 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-slate-50">Monthly</h5>
<p><span class ="-ml-20">Ksh</span><br><span class ="font-bold text-lg">500</span><span>/month</span><br><br>This plan allows users to conveniently purchase a subscription on a monthly basis</p>
</div>
<div class ="border-2 w-52 h-48 bg-cyan-500 px-8 rounded-lg">
<h5 class ="text-center font-bold pt-3 pb-4 text-slate-50">Yearly</h5>
<p><span class ="-ml-20">Ksh</span><br><span class ="font-bold text-lg">1800</span><span>/year</span><br><br>This plan allows users to conveniently purchase a subscription on a yearly basis</p>
</div>
</div>
</div>
<div>
<h3 class ="pt-4 text-l text-center font-semibold "> With our premium membership individuals are able to unlock the following features</h3>
<div class="grid grid-cols-2 gap-0 grid justify-items-center mt-6 text-xs -ml-16 text-slate-50  ">
<div class ="border-2  w-52 h-36 bg-amber-500 px-8 rounded-lg">
<h5 class ="uppercase pt-3 pb-4 font-bold">Students</h5>
    <ul class="list-disc">
        <li>Full e-library access</li>
        <li>Full e-classroom access</li>
        <li>Full blog access with push notifications</li>
    </ul>
</div>
<div class ="border-2 w-52 h-42 bg-amber-500 px-8 rounded-lg">
    <h5 class ="uppercase pt-3 pb-4 font-bold">Teachers</h5>
    <ul class="list-disc">
        <li>Full e-library access with ability to post content</li>
        <li>Full e-classroom access</li>
        <li>Full blog access with push notifications</li>
    </ul>
</div>
</div>
</div>
<br>
<hr class =" h-2 pt-0 border-slate-900">
<br>
<div class="">
<h5 class ="pt-0 text-l text-center font-semibold ">To purchase your selected package follow the instructions below to receive an activation code</h5><br>
<div class ="">
    <ul class=" text-center text-sm">
        <li>1. Go to M-Pesa > Lipa na M-Pesa > Buy Goods and Services</li><br>
        <li>2. Enter 5056029(Till Number) > Enter Amount (Any package shown above)</li><br>
        <li>3. Enter M-Pesa pin and send. Confirm it is payable to 'E-Soma Solutions'</li><br>
        <li>4. A code will be sent to the number used to pay. Click below to activate</li>
    </ul>
    <br>
<a class ="bg-amber-500 rounded text-center w-48 px-8 py-2.5 shadow-md hover:bg-sky-700 ml-96"href =" ">Activate Account</a>
<br>
</div>
</div>



</div>

<br><br>
@endsection
</body>
</html>