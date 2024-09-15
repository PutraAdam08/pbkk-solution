<x-layout>
    <x-slot:title>
        blogs
    </x-slot>
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-violet-200 sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-violet-300">Learn how to grow your business with our expert advice.</p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-violet-300 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <x-blog-card></x-blog-card>
            </div>
        </div>
    </div>
</x-layout>