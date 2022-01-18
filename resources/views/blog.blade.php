@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">Blog posts</h1>

    </div>
</div>

@if(session()->has('message'))
<div class="w-4/5 m-auto mt-10 p-4">
    <p class="mb-4 text-gray-50 bg-green-700">
        {{session()->get('message')}}
    </p>
</div>

@endif

@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs p-5">Create post</a>
</div>

@endif

@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div class="">
         <img src="https://cdn.pixabay.com/photo/2016/08/29/08/55/work-1627703_960_720.jpg" width="700" alt="">
    </div>
    <div class="">
        <h2 class="text-gray-700 font-bold text-5xl pb-4"> {{$post->title}}</h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>, Created on {{date('jS M Y',strtotime($post->updated_at))}}
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{{$post->description}}</p>
        <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-white font-bold rounded-3xl p-5">Keep reading</a>
        @if (isset(Auth::user()->id)&& Auth::user()->id == $post->user_id )
        <span class="float-right">
            <a href="/blog/{{$post->slug}}/edit"
            class="text-gray-700 italic hover:text-black">edit</a>
        </span>
        <span class="float-right">
            <form action="/blog/{{$post->slug}}" method="POST">
                @csrf
                @method('delete')
                <button 
                class="text-red-500 p-4"
                type="submit">Delete</button>
            </form>

        </span>


        @endif
    </div>
</div>
@endforeach


@endsection