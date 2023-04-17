@extends('layouts.app')


@section('content')
    <div class="container  m-auto text-center  pt-15 pb-5">
        <h1 class="text-6xl font-bold"> Add New Topic</h1>
    </div>
    <div class="container  mx-auto  pt-15 pb-5">
        <form  action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="title" class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5">
            <textarea name="description" class="w-full h-60 text-6l rounded-lg shadow-lg border-b p-15 mb-5" ></textarea>

            <div class="py-15">
                <label class="bg-gray-200 hover:bg-gray-700  text-gray-700 hover: text-gray-200 transition duration-300 cursor">
                    <span>select an image to upload</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button type="submit" class="bg-green-700 hover:bg-green-700 text-gray-200 hover:text-gray-200 p-5 rounded-lg font-bold uppercase mt-8">Submit The Post</button>

        </form>
    </div>


@endsection
