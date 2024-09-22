<x-layout>
    <x-slot:title>
        {{ $post->title}}
    </x-slot>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$post->author->name}}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO Flowbite</p>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{$post->create_at}}</p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-violet-400 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title}}</h1>
          </header>
          <p class="text-violet-200">{{$post->body}}</p>
      </article>
  </div>   
</x-layout>
