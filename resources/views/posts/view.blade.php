<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table border="1" width="100%" class="text-center">
                        <thead>
                            <th>S#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Actions</th>
                        </thead>

                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->date }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>
                                        <a href="{{ route('posts.show', $post->id) }}">Details</a>
                                        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                        <a href="#"
                                            onclick="
                                            event.preventDefault();
                                            if (confirm('Are you sure?')) {
                                                document.getElementById('delete-form-{{ $post->id }}').submit()
                                            }
                                        ">Delete</a>

                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            id="delete-form-{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Records</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
