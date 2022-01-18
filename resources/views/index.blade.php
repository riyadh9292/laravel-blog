@extends('layouts.app')

@section('content')
<div class="background-image grid-cols-1 m-auto"> 
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do yo want to become a developer
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read more</a>

        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div class="">
        <img src="https://cdn.pixabay.com/photo/2016/08/29/08/55/work-1627703_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            struggling to become a better developer!
        </h2>
        <p class="py-8 text-gray-500 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio odit et impedit! Aliquid minus necessitatibus laborum beatae officiis culpa qui impedit voluptates sed. Hic tenetur similique tempore et minima cumque voluptate. Esse asperiores officiis maxime natus modi unde alias saepe exercitationem ipsa odio? Blanditiis officiis asperiores exercitationem amet odio nemo!
        </p>
        <p class="font-extrabold text-gray-600 text-sm pb-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, aliquid quae. Qui magnam necessitatibus quaerat rerum ad? Quae, ratione eaque.</p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl">Find out more</a>

    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 ">I am an expert in ...</h2>
    <span class="font-extrabold block text-4xl py-1">UX Design</span>
    <span class="font-extrabold block text-4xl py-1">Project Management</span>
    <span class="font-extrabold block text-4xl py-1">Digital strategy</span>
    <span class="font-extrabold block text-4xl py-1">Backend development</span>
</div>
<div class="text-center py-15">
    <span class="uppercase text-sm text-gray-400">Blog</span>
    <h2 class="text-4xl font-bold py-10">Recent posts</h2>
    <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit iusto hic voluptatum ipsam debitis pariatur nemo quos quia vitae! Earum aliquid sunt tempora illo voluptatem.</p>

</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10 p-4">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">PHP</span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas qui perspiciatis natus iste omnis fugiat tempore eaque veritatis facilis obcaecati.

            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                find out more
            </a>
        </div>
         
    </div>
     <div class="">
        <img src="https://cdn.pixabay.com/photo/2016/08/29/08/55/work-1627703_960_720.jpg" width="700" alt="">
    </div>
</div>
@endsection