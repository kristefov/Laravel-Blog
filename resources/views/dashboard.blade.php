<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($posts as $post)
                                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
                                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-2">{{ $post->title }}</h2>
                                    <p class="text-gray-600 dark:text-gray-400">{{ $post->excerpt }}</p>
                                    <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:text-blue-700 dark:hover:text-blue-300 mt-4 block">Read more</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
