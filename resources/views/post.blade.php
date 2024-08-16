<x-layout>
    <x-slot:title> {{ $title }}</x-slot>

    <article class="py-6 max-w-screen-md border-b-2 border-gray-400">
        <h2 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-gray-500 text-base mb-4">
            <a class="hover:underline" href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> |
            {{ $post['created_at'] }}
        </div>
        <p class="mb-4 font-light text-justify">{{ $post['content'] }}</p>
        <a href="/posts" class="font-medium text-purple-900 hover:underline">&laquo; Back to all</a>
    </article>


</x-layout>
