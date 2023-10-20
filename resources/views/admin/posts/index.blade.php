<x-layout>
    <x-setting heading="Manage Posts">
        <ul role="list" class="divide-y divide-gray-100">
            @foreach($posts as $post)

            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset('storage/' . $post->thumbnail) }}">
                    <div class="min-w-0 flex-auto">
                        <div class="text-sm font-medium text-gray-900 mt-3">
                            {{ $post->title }}
                        </div>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <a href="/admin/posts/{{ $post->id }}" class="mt-3 font-semibold leading-6 text-blue-500">Edit</a>
                </div>
            </li>

            @endforeach
        </ul>
    </x-setting>
</x-layout>