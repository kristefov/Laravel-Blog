<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="py-12 flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($categories as $category)
                        <div class="flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg mb-4">
                            <div class="text-lg font-medium">
                                {{ $category->name }}
                            </div>
                            <div class="flex space-x-4">
                                <a href="{{ route('categories.edit', $category) }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Edit</a>
                                <form method="POST" action="{{ route('categories.destroy', $category) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-4 text-center">
                        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add new category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
