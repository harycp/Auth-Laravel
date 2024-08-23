<x-layout>
    <x-slot:title> {{ $title }}</x-slot>

    @foreach ($posts as $post)
        <article class="py-6 max-w-screen-md border-b-2 border-gray-400">
            <h2 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            <div class="mb-4">
                <a class="hover:underline text-gray-500 text-base"
                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> |
                {{ $post['created_at']->diffForHumans() }} |
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-gray-500 text-base">{{ $post->category->name }}</a>
            </div>
            <p class="mb-4 font-light">{{ Str::limit($post['content'], 70) }}</p>
            <a href="/post/{{ $post['slug'] }}" class="font-medium text-purple-900 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
