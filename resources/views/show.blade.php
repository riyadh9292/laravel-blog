@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">{{$post->title}}</h1>

    </div>
    <div class="">
        <span class="text-gray-500">
            by <span class="text-gray-800">{{$post->user->name}}</span>, Created on {{date('jS M Y',strtotime($post->updated_at))}}
        </span>
        <p class="text-xl text-gray-700 p-6">
            {{$post->description}}
        </p>
    </div>
</div>







@endsection