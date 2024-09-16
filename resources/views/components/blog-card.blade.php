<div>
    <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-violet-300">Mar 16, 2020</time>
          <!--<a href="#" class="relative z-10 rounded-full bg-violet-200 px-3 py-1.5 font-medium text-violet-500 hover:bg-violet-100">Marketing</a>-->
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-violet-200 group-hover:text-violet-200">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{ $title }}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-violet-300">{{ $body }}</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-violet-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-violet-200">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{ $author }}
              </a>
            </p>
            <!--<p class="text-violet-200">Co-Founder / CTO</p>-->
          </div>
        </div>
    </article>
</div>