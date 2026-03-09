@extends('layouts.admin')

@section('title', 'Manage Skills')

@section('content')
<div class="space-y-6">
    <!-- Skills Form -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Update Skills</h3>
        </div>
        <div class="p-6">
            <form action="{{ route('admin.skills.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Frontend Skills -->
                <div>
                    <label for="frontend" class="block text-sm font-medium text-gray-700">Frontend Skills</label>
                    <p class="text-xs text-gray-500 mb-2">Enter one skill per line</p>
                    <textarea name="frontend" id="frontend" rows="5" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ implode("\n", $skills['frontend'] ?? []) }}</textarea>
                </div>

                <!-- Backend Skills -->
                <div>
                    <label for="backend" class="block text-sm font-medium text-gray-700">Backend Skills</label>
                    <p class="text-xs text-gray-500 mb-2">Enter one skill per line</p>
                    <textarea name="backend" id="backend" rows="5" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ implode("\n", $skills['backend'] ?? []) }}</textarea>
                </div>

                <!-- Tools -->
                <div>
                    <label for="tools" class="block text-sm font-medium text-gray-700">Tools & Others</label>
                    <p class="text-xs text-gray-500 mb-2">Enter one skill per line</p>
                    <textarea name="tools" id="tools" rows="5" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ implode("\n", $skills['tools'] ?? []) }}</textarea>
                </div>

                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save Skills
                </button>
            </form>
        </div>
    </div>

    <!-- Current Skills Preview -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Current Skills Preview</h3>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Frontend -->
                <div>
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-3">Frontend</h4>
                    <ul class="space-y-2">
                        @foreach($skills['frontend'] ?? [] as $skill)
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $skill }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Backend -->
                <div>
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-3">Backend</h4>
                    <ul class="space-y-2">
                        @foreach($skills['backend'] ?? [] as $skill)
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $skill }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Tools -->
                <div>
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-3">Tools & Others</h4>
                    <ul class="space-y-2">
                        @foreach($skills['tools'] ?? [] as $skill)
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $skill }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
