<section
  id="projects"
  x-data="
        {
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
    class="pt-20 lg:pt-[70px] pb-12 lg:pb-[70px]">

    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 pt-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-2 pt-2">
                        My Recent Projects
                    </h2>
                    <p class="text-base text-body-color">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                    <li class="mb-1">
                        <button
                                @click="selectedTab = 'all' "
                                :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
                                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
                                > 
                            All Projects
                        </button>
                    </li>
                    @foreach($tabs as $tab)
                        <li class="mb-1">
                            <button
                                @click="selectedTab = '{{$tab}}' "
                                :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "
                                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
                                {{$tab}}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($items as $item)
                <x-portofolio-item  :title="$item['title']"
                                    :categories="$item['category']"
                                    :description="$item['description']"
                                    :image="$item['image']"
                                    :github="$item['github']">
                </x-portofolio-item>
             @endforeach
        </div>
    </div>
</section>