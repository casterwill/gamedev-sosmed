<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timeline') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        @error('body')
                        <span class="text-error block">{{ $message }}</span>
                        @enderror
                        <textarea name="body" class="w-full block rounded-full textarea textarea-bordered @error('body') textarea-error @enderror" rows="3" placeholder="Post here">{{ old('body') }}</textarea>
                        <input type="submit" value="Post" class="btn mt-2">
                    </form>
                </div>
            </div>

            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie" /></figure>
                <div class="card-body">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Click the button to watch on Jetflix app.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Watch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>