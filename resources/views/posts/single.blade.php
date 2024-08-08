<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="container">
                                <h1>{{ $post->title }}</h1>
                                <p>{{ $post->text }}</p>
                                <p>{{ $post->category->name }}</p>
                                <a href="{{ route('posts.index') }}">posts</a>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
