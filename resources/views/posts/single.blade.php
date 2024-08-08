<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ $post->title }}</h1>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->text }}</p>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $post->category->name }}</p>
                            <div class="flex space-x-4">
                                <a href="/" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-700 dark:hover:bg-indigo-300">Back to Home</a>
                                @auth
                                <a href="{{ route('posts.index') }}" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-700 dark:hover:bg-indigo-300">Back to Posts</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
