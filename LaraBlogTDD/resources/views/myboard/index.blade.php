<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Board') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome to Myboard") }}
                    <!-- My board link START -->
                    <div class="flex items-center justify-start mt-4">
                        <a href="{{ route('myboard.myposts.index') }}">
                            <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Show my Post') }}
                            </x-primary-button>
                        </a>
                        <a href="{{ route('myboard.mycategories.index') }}">
                            <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Show my Category') }}
                            </x-primary-button>
                        </a>
                        <a href="{{ route('myboard.mytags.index') }}">
                            <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Show my Tag') }}
                            </x-primary-button>
                        </a>
                        <a href="{{ route('myboard.mycomments.index') }}">
                            <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Show my Comments') }}
                            </x-primary-button>
                        </a>
                    </div>
                    <!-- My board link END -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>