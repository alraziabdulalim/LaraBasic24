<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('posts.index') }}">
                <x-primary-button class="ms-4 text-sm text-white-600 hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Back to Post List') }}
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
                    {{ __("Post Form") }}

                    <!-- Post Form START -->
                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PATCH')

                        <!-- Post Name -->
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$post->title" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Post Content -->
                        <div>
                            <x-input-label for="content" :value="__('Content')" />
                            <textarea id="content" name="content" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required autofocus autocomplete="content">{{ $post->content }}</textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <!-- Post Category -->
                        <div>
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $category->id == $post->category_id? 'selected' : '' }} >{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <!-- Post Tag -->
                        <div>
                            <x-input-label for="tag_id" :value="__('Tag')" />
                            <select id="tag_id" name="tag_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" multiple>
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}" {{ $tag->id == $post->tag_id? 'selected' : '' }} >{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('tag_id')" class="mt-2" />
                        </div>


                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Update Post') }}
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