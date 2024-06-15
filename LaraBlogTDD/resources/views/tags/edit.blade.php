<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tag') }}
        </h2>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('tags.index') }}">
                <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Back to Tag List') }}
                </x-primary-button>
            </a>
        </div>
    </x-slot>
    @endauth

    @auth
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Tag Form") }}

                    <!-- Tag Form START -->
                    <form method="POST" action="{{ route('tags.update', $tag) }}">
                        @csrf
                        @method('PATCH')

                        <!-- Tag Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$tag->name" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Update Tag') }}
                            </x-primary-button>
                        </div>

                    </form>
                    <!-- Tag Form END -->

                </div>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>