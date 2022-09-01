<div x-data="{categories: {{ json_encode($categories) }} }" :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' " class="w-full md:w-1/2 xl:w-1/3 px-4">
    <div class="relative mb-12">
        <a href="{{$github}}" target="_blank">
            <div class="rounded-lg overflow-hidden ease-in duration-300 hover:scale-105">
                <img src="{{ $image }}" alt="portofolio" class="w-full h-[260px] object-cover" target="_blank">
            </div>
        </a>
        <div class="text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]">
            <span class="text-base dark:text-yellow-500 font-medium block mb-1">
                {{ implode(" & ", $categories) }}
            </span>
            <h3 class="font-bold text-lg text-dark dark:text-sky-300">
                {{ $title }}
            </h3>
            <h5 class="font-normal text-sm text-dark dark:text-gray-100">
                {{ $description }}
            </h5>
            <x-button-link :href="$github"  target="_blank" class="mt-8 hover:bg-cyan-400 duration-300 border-slate-50 bg-transparent ">Visit More</x-button-link>
        </div>
    </div>
</div>