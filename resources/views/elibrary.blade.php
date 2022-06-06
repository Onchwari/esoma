@extends('layouts.userLayout')
<html>
    
<body>

@section('content')

<div>

<div class ="bg-[url('/images/images/library.jpg')] bg-contain px-32 py-40 pb-20">
        <h1 class=" text-center absolute h-16 not-italic font-medium text-5xl text-slate-50 top-32 ml-28 border-b-4 border-cyan-500">WELCOME TO THE ESOMA E-LIBRARY</h1>
</div>
<br><br>
<hr class =" h-10 py-8 border-slate-900">
<div class ="px-36">
    <h3 class ="divide-y-[20px] text-4xl font-semibold text-cyan-600 "> What is Esoma Library?</h3>
    <br>
    <p class ="leading-8 text-lg">Esoma Library is an interactive online classroom where students and teachers interact. With Esoma classroom, as a student, you are able to track your scores and general performance, and share learning content online. Video content is also available in study notes to help you understand easily.<br><br>
    Our LMS is also designed to help schools, homeschooling institutions, and other institutions in managing their teaching and learning activities.</p>
</div>
<div class ="px-32">
<h3 class ="py-8 text-4xl font-semibold text-cyan-600"> What does the Esoma Library offer?</h3>
<div class="grid grid-cols-2 gap-0 grid justify-items-center mt-6 text-xs -ml-16 ">
    <div class ="border-2 w-52 h-48 bg-slate-400 px-8 rounded-lg">
<h5 class ="uppercase pt-3 pb-4">Guest account</h5>
    <ul class="list-disc">
        <li>Join multiple classes</li>
        <li>Access content uploaded by the teacher</li>
    </ul>
</div>
<div class ="border-2 w-52 h-48 bg-slate-400 px-8 rounded-lg">
    <h5 class ="uppercase pt-3 pb-4">Student account</h5>
    <ul class="list-disc">
        <li>Create new class</li>
        <li>Have students enroll into your class</li>
        <li>Manage multiple classes</li>
        <li> Add assignments and upload learning content</li>
    </ul>
</div>
</div>
<div>
<br><br>
<a class ="bg-amber-500 rounded text-center w-48 px-6 py-2.5 shadow-md hover:bg-sky-700 ml-96"href =" ">Access the E-soma Library</a>
</div>
</div>
<div>
    <h4 class="py-4 text-center font-bold text-xl pt-10">Checkout the videos below to get familiar with Esoma Library</h4>
    <div class="grid grid-cols-2 gap-x-4 grid justify-items-center mt-6 -ml-16 py-10 px-20">
    <embed class=""src ="https://www.youtube.com/embed/RT7VXrRLMBo"></embed>
    <embed src ="https://www.youtube.com/embed/ukpVhZpgngw"></embed>
</div>
</div>



</div>


@endsection
</body>
</html>