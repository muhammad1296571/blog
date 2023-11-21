<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 mt-6">
                            <x-input-label for="name" :value="__('Title')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="title"
                                :value="old('title') ?? $post->title" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-3 mt-6">
                            <x-input-label for="name" :value="__('Date')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="date" name="date"
                                :value="old('date') ?? $post->date" required autofocus autocomplete="date" />
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>

                        <div class="mb-3 mt-6">
                            <x-input-label for="name" :value="__('Body')" />
                            <textarea id="name"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                                rows="7" type="body" name="body" required autofocus autocomplete="body">
                                {{ old('body') ?? $post->body }}
                            </textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>

                        <div class="mb-3 mt-6">
                            <x-primary-button type="submit">Update Post</x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
