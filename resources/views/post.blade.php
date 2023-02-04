@extends('layouts.structure')
@section('content')
<main class="flex-1 flex flex-col">
            <div class="max-w-2xl w-full py-12 px-4 mx-auto">
    <div class="mb-5 text-gray-500 text-xs">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block w-4 h-4 text-gray-400 dark:fill-gray-600">
 
        </svg>
        {{ $post->created_at->diffForHumans() }}
        &middot;
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block w-4 h-4 text-gray-400 dark:fill-gray-600">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
        </svg>
        Read time 4 min
    </div>
    <div class="prose prose-zinc dark:prose-invert max-w-none">
    <h1 onmousedown="return false" onselectstart="return false">{{ $post->title }}</h1> 
                                <!--    <div class="p-4 rounded-md bg-red-500/10 text-red-800 dark:text-white"> 
Just a heads up this this article is over 12 months old and <em>might</em> be out of date! 
            </div> -->
            <p>
                {!! $content !!}
</p>
</div>
@endsection