<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }}
        </h2>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('comments.index') }}">
                <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Back to Comment List') }}
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
                    {{ __("Comment Form") }}

                    <!-- Comment Form START -->
                    <form method="POST" action="{{ route('myboard.mycomments.store', $post) }}">
                        @csrf

                        <div>
                            {{ 'Comment of :: ' . $post->id . ' # ' .  $post->title}}
                        </div>
                        <!-- Comment Name -->
                        <div>
                            <x-input-label for="aphorism" :value="__('Comment')" />
                            <textarea id="aphorism" name="aphorism" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autofocus autocomplete="aphorism">{{ old('aphorism') }}</textarea>
                            <x-input-error :messages="$errors->get('aphorism')" class="mt-2" />
                        </div>

                        <!-- Hidden Input for Post ID -->
                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>

                    </form>
                    <!-- Comment Form END -->

                </div>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>