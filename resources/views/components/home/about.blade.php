<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ url('/img/about1.jpg') }}" alt="" class="rounded-2xl w-full"/>
                        </div>
                        <div class="py-3 sm:py-4"  data-aos="fade-down" data-aos-duration="1000">
                            <img src="{{ url('/img/about2.jpeg') }}" alt="" class="rounded-2xl w-full"/>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="{{ url('/img/about3.jpeg') }}" alt="" class="rounded-2xl w-full"/>
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500" data-aos-duration="1000" data-aos="fade-left">
                            "More Food More Skills"
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8" data-aos-duration="1100" data-aos="fade-left">
                        About Me
                    </h2>
                    <p class="text-base dark:text-gray-400 mb-8" data-aos-duration="1200" data-aos="fade-left">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br />
                        Ab repellendus quis hic, voluptatum veritatis praesentium fuga nesciunt ullam cumque magnam cupiditate consequatur! 
                        Nemo animi numquam consequatur velit aut, aperiam eos. <br />
                    </p>
                    <p class="text-base dark:text-gray-400 mb-8" data-aos-duration="1300" data-aos="fade-left">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br />
                        <span class="text-amber-500 font-bold ">PHP</span> and  <span class="text-amber-500 font-bold ">PHP</span>. <br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </p>
                    <x-button-link href="" variant="red" target="_blank" data-aos-duration="1500" data-aos="fade-left">Visit the ...</x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-16 lg:pt-[60px] pb-10 lg:pb-20 bg-[#F3F4F6] ">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
             <div class="text-center mx-auto mb-[60px] max-w-[660px]">
                 <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-sky-800 mb-4" data-aos-duration="1200" data-aos="fade-down">
                   My Programming Language Level
                 </h2>
                 {{-- <p class="text-base text-body-color text-red-700">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 </p> --}}
             </div>
         </div>
     </div>
       <div class="flex flex-wrap -mx-4">
         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-5" data-aos-duration="1000" data-aos="fade-up">
               <img
                  src="{{ url('/img/html.png') }}"
                  alt="image"
                  class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                     HTML
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-2">
                     Intermediate
                  </p>
                  {{-- <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a> --}}
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
               <img
                  src="{{ url('/img/css.png') }}"
                  alt="image"
                  class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                        CSS
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-2">
                     Intermediate
                  </p>
                  {{-- <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a> --}}
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
               <img
                  src="{{ url('/img/javascript-2.png') }}"
                  alt="image"
                  class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                        JAVASCRIPT
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-2">
                     Intermediate
                  </p>
                  {{-- <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a> --}}
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
         <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
            <img
               src="{{ url('/img/node-js.png') }}"
               alt="image"
               class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
               />
            <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
               <h3>
                  <a
                     href="javascript:void(0)"
                     class="
                     font-semibold
                     text-dark text-xl
                     sm:text-[22px]
                     md:text-xl
                     lg:text-[22px]
                     xl:text-xl
                     2xl:text-[22px]
                     mb-4
                     block
                     hover:text-primary
                     "
                     >
                     NODE JS
                  </a>
               </h3>
               <p class="text-base text-body-color leading-relaxed mb-2">
                     Intermediate
               </p>
               {{-- <a
                  href="javascript:void(0)"
                  class="
                  inline-block
                  py-2
                  px-7
                  border border-[#E5E7EB]
                  rounded-full
                  text-base text-body-color
                  font-medium
                  hover:border-primary hover:bg-primary hover:text-white
                  transition
                  "
                  >
               View Details
               </a> --}}
            </div>
         </div>
         </div>

         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
               <img
                  src="{{ url('/img/php.png') }}"
                  alt="image"
                  class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                        PHP
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-2">
                        Intermediate
                  </p>
                  {{-- <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a> --}}
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
               <img
                  src="{{ url('/img/laravel.jpeg') }}"
                  alt="image"
                  class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                        REACT JS
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-2">
                        Beginner
                  </p>
                  {{-- <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a> --}}
               </div>
            </div>
         </div>
         
         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
               <img
                  src="{{ url('/img/bootstrap-logo-5633.svg') }}"
                  alt="image"
                  class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
                  <h3>
                     <a
                        href="javascript:void(0)"
                        class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        "
                        >
                        LARAVEL
                     </a>
                  </h3>
                  <p class="text-base text-body-color leading-relaxed mb-2">
                        Intermediate
                  </p>
                  {{-- <a
                     href="javascript:void(0)"
                     class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     "
                     >
                  View Details
                  </a> --}}
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
         <div class="bg-white rounded-lg overflow-hidden mb-10" data-aos-duration="1000" data-aos="fade-up">
            <img
               src="{{ url('/img/OIP.jpeg') }}"
               alt="image"
               class="w-full overflow-hidden ease-in duration-300 hover:scale-105 hover:bg-[url('/img/levels.png')] "
               />
            <div class="p-8 sm:p-9 md:p-7 xl:p-4 text-center">
               <h3>
                  <a
                     href="javascript:void(0)"
                     class="
                     font-semibold
                     text-dark text-xl
                     sm:text-[22px]
                     md:text-xl
                     lg:text-[22px]
                     xl:text-xl
                     2xl:text-[22px]
                     mb-4
                     block
                     hover:text-primary
                     "
                     >
                     LARAVEL
                  </a>
               </h3>
               <p class="text-base text-body-color leading-relaxed mb-2">
                     Intermediate
               </p>
               {{-- <a
                  href="javascript:void(0)"
                  class="
                  inline-block
                  py-2
                  px-7
                  border border-[#E5E7EB]
                  rounded-full
                  text-base text-body-color
                  font-medium
                  hover:border-primary hover:bg-primary hover:text-white
                  transition
                  "
                  >
               View Details
               </a> --}}
            </div>
         </div>
         </div>
      </div>
   </div>
</section>

