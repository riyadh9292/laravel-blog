@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">create post</h1>

    </div>
</div>

@if ($errors->any())
<div class="m-auto">
    <ul>
        @foreach ($errors->all() as $error )
        <li class="text-red-700">{{$error}}</li>

        @endforeach
    </ul>
</div>

@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data"  >
        @csrf
<input type="text" name="title" placeholder="Title" class="bg-gray-0 block border-b-2 w-full h-20 text-6xl outline-none" id="">
<textarea name="description" placeholder="Description" class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none" id="" cols="30" rows="10"></textarea>
<input type="file" name="image" class="">

<button class="uppercase mt-15 bg-blue-500 text-gray-100 font-bold py-4 px-8" type="submit">
    submit post
</button>
    </form>
</div>



@endsection