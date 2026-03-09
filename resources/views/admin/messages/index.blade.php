@extends('layouts.admin')

@section('title', 'Messages')

@section('content')
<div class="space-y-6">
    <!-- Messages List -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Contact Messages</h3>
        </div>
        <div class="p-6">
            @if($messages->count() > 0)
                <div class="space-y-4">
                    @foreach($messages as $message)
                        <div class="border border-gray-200 rounded-lg p-4 {{ $message->read ? 'opacity-60' : '' }}">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                            <span class="text-indigo-600 font-medium">{{ substr($message->name, 0, 1) }}</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2">
                                            <h4 class="text-lg font-medium text-gray-900">{{ $message->name }}</h4>
                                            @if(!$message->read)
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-indigo-100 text-indigo-800">
                                                    Unread
                                                </span>
                                            @endif
                                        </div>
                                        <p class="text-sm text-gray-500">{{ $message->email }}</p>
                                        @if($message->subject)
                                            <p class="text-sm font-medium text-gray-700 mt-1">{{ $message->subject }}</p>
                                        @endif
                                        <p class="text-sm text-gray-600 mt-2">{{ $message->message }}</p>
                                        <p class="text-xs text-gray-400 mt-2">{{ $message->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="mailto:{{ $message->email }}" class="text-indigo-600 hover:text-indigo-900 text-sm">
                                        Reply
                                    </a>
                                    <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm" onclick="return confirm('Are you sure you want to delete this message?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-8">No messages yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
