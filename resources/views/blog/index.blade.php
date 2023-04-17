@extends('layouts.app')


@section('content')



@if(session()->has('message'))



<div class="bg-red-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Deleted</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('message') }}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
  @endif

<DIV class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
</DIV>

@if(Auth::check())


<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    <a href="/blog/create" class="bg-green-700  text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Add New Topic</a>
</div>
@endif






<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
<div class="flex">
    <img  class="object-cover" src="https://picsum.photos/id/343/960/620" alt="">
</div>
<div>
<h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0  "> How to craete a blog with laravel</h2>
<div>

    By: <span class="text-gray-500 italic"> Asma Elaachari</span>
<p class=" text-l text-gray-700 py-8 leading-6">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illo numquam, molestias officia ratione veritatis similique culpa quisquam perspiciatis optio corporis perferendis quidem unde, quas soluta, repudiandae minima nihil voluptatem.</p>
<a href="/" class="bg-gray-700  text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>


</div>
</div>
</div>
@foreach($posts as $post)
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
    <div class="flex">
        <img  class="object-cover" src="/images/{{ $post->image_path }}" alt="">
    </div>
    <div>
    <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0  "> {{$post->title }}</h2>
    <div>

        By: <span class="text-gray-500 italic"> {{ $post->user->name }}</span>
        on: <span class="text-gray-500 italic">{{ date('d-m-Y',strtotime($post->updated_at)) }} </span>
    <p class=" text-l text-gray-700 py-8 leading-6">
        {{ $post->description}}.</p>
    <a href="/blog/{{$post->slug }}" class="bg-gray-700  text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>


    </div>
    </div>
    </div>

@endforeach

@endsection
