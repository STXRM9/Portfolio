@extends('layouts.admin')

@section('title', 'Manage Projects')

@section('content')
<div class="space-y-6">
    <!-- Add New Project Form -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Add New Project</h3>
        </div>
        <div class="p-6">
            <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="category" id="category"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="web">Web</option>
                            <option value="mobile">Mobile</option>
                            <option value="design">Design</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="2" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="technologies" class="block text-sm font-medium text-gray-700">Technologies (comma separated)</label>
                        <input type="text" name="technologies" id="technologies" placeholder="React, Laravel, Node.js"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="link" class="block text-sm font-medium text-gray-700">Project Link</label>
                        <input type="url" name="link" id="link" placeholder="https://"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Icon/Emoji</label>
                        <input type="text" name="image" id="image" placeholder="📁"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="gradient" class="block text-sm font-medium text-gray-700">Gradient</label>
                        <select name="gradient" id="gradient"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="from-blue-500 to-indigo-600">Blue to Indigo</option>
                            <option value="from-pink-500 to-rose-600">Pink to Rose</option>
                            <option value="from-cyan-500 to-blue-600">Cyan to Blue</option>
                            <option value="from-green-500 to-emerald-600">Green to Emerald</option>
                            <option value="from-orange-500 to-amber-600">Orange to Amber</option>
                            <option value="from-violet-500 to-purple-600">Violet to Purple</option>
                            <option value="from-indigo-500 to-purple-600">Indigo to Purple</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Project
                </button>
            </form>
        </div>
    </div>

    <!-- Projects List -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Existing Projects</h3>
        </div>
        <div class="p-6">
            @if(count($projects) > 0)
                <div class="space-y-4">
                    @foreach($projects as $index => $project)
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0 text-3xl">{{ $project['image'] ?? '📁' }}</div>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900">{{ $project['title'] }}</h4>
                                        <p class="text-sm text-gray-500 mt-1">{{ $project['description'] }}</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            @foreach($project['technologies'] as $tech)
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                    {{ trim($tech) }}
                                                </span>
                                            @endforeach
                                        </div>
                                        <p class="text-xs text-gray-400 mt-2">Category: {{ $project['category'] }}</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <form action="{{ route('admin.projects.destroy', $index) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm" onclick="return confirm('Are you sure you want to delete this project?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-4">No projects yet. Add your first project above.</p>
            @endif
        </div>
    </div>
</div>
@endsection
