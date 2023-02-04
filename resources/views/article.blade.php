@extends('layouts.structure')
@section('content')
<main class="flex-1 flex flex-col">
            <div class="max-w-2xl w-full py-12 px-4 mx-auto">
    <div class="prose prose-zinc dark:prose-invert max-w-none">
    <h1 onmousedown="return false" onselectstart="return false"
>Things that are too long to tweet</h1>
</div>

   @forelse($articles as $article)  
    <section class="mt-12 space-y-16">
                    <article class="">
                <p onmousedown="return false" onselectstart="return false" class="text-gray-500 text-sm">{{ $article->created_at->diffForHumans() }}</p>
                <h2 class="mt-3 font-medium text-lg text-gray-800 dark:text-gray-200">
                    <a href="/articles/{{ $article->slug }}" class="hover:underline focus:underline">
                        {{ $article->title }}
                    </a>
                    <a href="tag/{{ $article->tag }}">
                   
                    <span class="ml-2 inline-block px-2 leading-5 rounded-full text-xs bg-gradient-to-br from-gray-500 to-gray-700 text-white font-medium">{{ $article->tag }}</span>

                    </a>
                </h2>
                <p onmousedown="return false" onselectstart="return false" class="mt-3 text-base text-gray-500 leading-relaxed">{{ $article->mini_description }}</p>
                <p class="mt-3 text-base text-gray-700 dark:text-gray-300">
                    <a href="/articles/{{ $article->slug }}" class="hover:underline focus:underline">Read article &rarr;</a>
                </p>
            </article>
            @empty
            <h2 class="mt-3 font-medium text-lg text-gray-800 dark:text-gray-200">
            <a href="/" class="hover:underline focus:underline">
              <br>
            No Articles Found
</a>
</h2>
         @endforelse   
                        </section>
            {{ $articles->links(); }}
@endsection