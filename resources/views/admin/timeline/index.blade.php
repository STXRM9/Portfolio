@extends('layouts.admin')

@section('title', 'Manage Timeline')

@section('content')
<div class="space-y-6">
    <!-- Add New Timeline Entry -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Add New Timeline Entry</h3>
        </div>
        <div class="p-6">
            <form action="{{ route('admin.timeline.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="period" class="block text-sm font-medium text-gray-700">Period</label>
                        <input type="text" name="period" id="period" required placeholder="2022 - Present"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" required placeholder="Senior Developer"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="2" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="is_education" id="is_education" value="1"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="is_education" class="ml-2 block text-sm text-gray-700">
                        This is an education entry
                    </label>
                </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Entry
                </button>
            </form>
        </div>
    </div>

    <!-- Timeline List -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Existing Timeline Entries</h3>
        </div>
        <div class="p-6">
            @if(count($timeline) > 0)
                <div class="space-y-4">
                    @foreach($timeline as $index => $entry)
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        @if(isset($entry['is_education']) && $entry['is_education'])
                                            <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-green-100">
                                                <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                                </svg>
                                            </span>
                                        @else
                                            <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-indigo-100">
                                                <svg class="h-5 w-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </span>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <h4 class="text-lg font-medium text-gray-900">{{ $entry['title'] }}</h4>
                                            @if(isset($entry['is_education']) && $entry['is_education'])
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                                    Education
                                                </span>
                                            @endif
                                        </div>
                                        <p class="text-sm text-indigo-600 font-medium">{{ $entry['period'] }}</p>
                                        <p class="text-sm text-gray-500 mt-1">{{ $entry['description'] }}</p>
                                    </div>
                                </div>
                                <form action="{{ route('admin.timeline.destroy', $index) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 text-sm" onclick="return confirm('Are you sure you want to delete this entry?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-4">No timeline entries yet. Add your first entry above.</p>
            @endif
        </div>
    </div>
</div>
@endsection
