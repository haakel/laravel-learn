<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-category-tabs>
                        no categories available
                    </x-category-tabs>
                </div>
            </div>
        </div>

    </div>
    <div class="py-1">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-7">
            <div class="mt-8 text-gray-900">
                <div class="p-6 ">
                    @forelse ($posts as $p)
                        <x-post-item :post="$p"></x-post-item>
                    @empty <div class="text-center text-gray-500 py-16">
                            No posts available.
                        </div>
                    @endforelse
                </div>
                {{ $posts->onEachSide(1)->links() }}

            </div>
        </div>

    </div>
</x-app-layout>
