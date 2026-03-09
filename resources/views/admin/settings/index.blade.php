@extends('layouts.admin')

@section('title', 'Site Settings')

@section('content')
<div class="space-y-6">
    <!-- Site Information -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Site Information</h3>
        </div>
        <div class="p-6">
            <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Site Name</label>
                        <input type="text" name="name" id="name" value="{{ $settings['name'] }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" value="{{ $settings['title'] }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="tagline" class="block text-sm font-medium text-gray-700">Tagline</label>
                    <input type="text" name="tagline" id="tagline" value="{{ $settings['tagline'] }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="2" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $settings['description'] }}</textarea>
                </div>

                <!-- Contact Information -->
                <div class="pt-6 border-t border-gray-200">
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-4">Contact Information</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ $settings['email'] }}" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ $settings['phone'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" name="location" id="location" value="{{ $settings['location'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="availability" class="block text-sm font-medium text-gray-700">Availability</label>
                            <input type="text" name="availability" id="availability" value="{{ $settings['availability'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="resume_url" class="block text-sm font-medium text-gray-700">Resume URL</label>
                        <input type="url" name="resume_url" id="resume_url" value="{{ $settings['resume_url'] }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <!-- Statistics -->
                <div class="pt-6 border-t border-gray-200">
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-4">Statistics</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="years_experience" class="block text-sm font-medium text-gray-700">Years of Experience</label>
                            <input type="text" name="years_experience" id="years_experience" value="{{ $settings['stats']['years_experience'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="projects_completed" class="block text-sm font-medium text-gray-700">Projects Completed</label>
                            <input type="text" name="projects_completed" id="projects_completed" value="{{ $settings['stats']['projects_completed'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="happy_clients" class="block text-sm font-medium text-gray-700">Happy Clients</label>
                            <input type="text" name="happy_clients" id="happy_clients" value="{{ $settings['stats']['happy_clients'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="satisfaction" class="block text-sm font-medium text-gray-700">Satisfaction Rate</label>
                            <input type="text" name="satisfaction" id="satisfaction" value="{{ $settings['stats']['satisfaction'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="pt-6 border-t border-gray-200">
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-4">Social Links</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="github" class="block text-sm font-medium text-gray-700">GitHub</label>
                            <input type="url" name="github" id="github" value="{{ $settings['social']['github'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn</label>
                            <input type="url" name="linkedin" id="linkedin" value="{{ $settings['social']['linkedin'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                            <input type="url" name="twitter" id="twitter" value="{{ $settings['social']['twitter'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                            <input type="url" name="facebook" id="facebook" value="{{ $settings['social']['facebook'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                            <input type="url" name="instagram" id="instagram" value="{{ $settings['social']['instagram'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- SEO Settings -->
                <div class="pt-6 border-t border-gray-200">
                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-4">SEO Settings</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="site_name" class="block text-sm font-medium text-gray-700">Site Name</label>
                            <input type="text" name="site_name" id="site_name" value="{{ $settings['seo']['site_name'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="default_title" class="block text-sm font-medium text-gray-700">Default Title</label>
                            <input type="text" name="default_title" id="default_title" value="{{ $settings['seo']['default_title'] }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="default_description" class="block text-sm font-medium text-gray-700">Default Description</label>
                        <textarea name="default_description" id="default_description" rows="2"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $settings['seo']['default_description'] }}</textarea>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Settings
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
