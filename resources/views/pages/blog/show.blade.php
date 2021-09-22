<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
    <section class="flex">
        <section>
            @include('partials.sidebar')
        </section>
        <section class="w-full h-full mt-8">
            <div class="mb-8">
                @include('partials.flash')
            </div>
            <section class="p-6 mx-auto ">
                <section class="bg-white dark:bg-gray-800">
                    <div class="container px-6 py-8 mx-auto">
                        <div class="">
                            <div class="w-auto">
                                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{$show->title}}</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 ">{{$show->content}}</p>
                        </div>
                    </div>
                </section>
                <button class="mt-5 ml-1 text-blue-500 hover:underline">
                    <a href="/blog">Retour</a>
                </button>
            </section>
        </section>
    </section>
</x-app-layout>