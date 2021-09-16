<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <section class="flex">
        <section>
            @include('partials.sidebar')
        </section>
        <section class="w-full h-full">
            <section class="mt-10 grid grid-cols-4 gap-4 mx-4 my-10">
                @foreach ($images as $image)
                    <div class="w-full max-w-xs text-center my-10">
                        <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                            src="{{ asset('storage/img/' . $image->src) }}" alt="avatar" />

                        <div class="mt-2 flex items-center justify-between d-flex">
                            <button
                                class="px-2 tracking-wide text-white capitalize  bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 ..."><a
                                    class=" text-" href="{{ asset('storage/img/' . $image->src) }}"
                                    download="image.jpg">Télécharge</a></button>
                            <p class="bg-dark"><span class="bg-gradient-to-r from-red-500 ..."> Categorie :</span> {{ $image->categories->name }}</p>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </section>
    </section>
</x-app-layout>
