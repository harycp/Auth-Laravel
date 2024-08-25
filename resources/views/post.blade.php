<x-layout>
    <x-slot:title> {{ $title }}</x-slot>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 rounded-xl bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    {{ $post['created_at']->format('F j, Y') }}</p>
                                <a href="/categories/{{ $post->category->slug }}">
                                    <span
                                        class="mt-4 bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded hover:opacity-70 dark:bg-primary-200 dark:text-primary-800">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post['title'] }}</h1>
                </header>
                <p class="lead">{{ $post['content'] }}</p>
                <a href="/posts" class="text-sm">&laquo; Back to posts</a>
            </article>
        </div>
    </main>

</x-layout>
