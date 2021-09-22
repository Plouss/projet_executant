<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>
    <section class="flex">
        <section>
            @include('partials.sidebar')
        </section>
        <section class="w-full h-full">
            @can('blog-create')
                <div class="text-center">
                    <a href="/blog/create">
                        <button value="Ajouter"
                            class="px-5 py-3 mt-6 ml-6 font-semibold text-gray-100 transition-colors duration-200 transform bg-pink-500 rounded-lg hover:bg-pink-400">Ajouter
                            un article
                        </button>
                    </a>
                </div>
            @endcan
            <div class="mb-6 mt-6">
                @include('partials.flash')
            </div>
            <section class="mt-10 w-auto mx-5  border-solid border-4 border-black">
                @foreach ($blogs as $blog)
                    <section class="my-5 text-center mx-10">
                        <div class="pt-10">
                            <h3
                                class=" text-2xl font-bold text-gray-800 italic
                            dark:text-white md:text-2xl">
                                {{ $blog->title }}</h3>
                            <p class="mt-4 text-gray-600 dark:text-gray-400">{{ Str::limit($blog->content, 100) }} <a
                                    href="/blog/{{ $blog->id }}" class="ml-2 text-blue-500 hover:underline">Lire</a>
                            </p>

                            <div class="flex mt-8 gap-3 justify-center">
                                @can('blog-edit')
                                    <div>
                                        <a href="/blog/{{ $blog->id }}/edit"
                                            class="px-4 py-1 font-semibold text-gray-100 transition-colors duration-200 transform bg-green-600 rounded-md hover:bg-green-500">Modifier</a>
                                    </div>
                                @endcan
                                @can('blog-delete')
                                    <div>
                                        <form action="/blog/{{ $blog->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button> <a
                                                    class="px-4 py-1 font-semibold text-gray-100 transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-500">Supprimer</a></button>
                                        </form>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </section>
                    <hr>
                @endforeach
            </section>
        </section>
    </section>
    </section>
</x-app-layout>
