@extends('layouts.web')

@section('content')
<section class="banner w-full bg-white">
    <img src="assets/images/Banner.png" alt="">
    <!-- <div class="relative flex h-[600px] bg-white w-full overflow-hidden">
        <img class="absolute w-80 -top-[10%] -left-[3%]" src="assets/images/Banner_shape/Line.png" alt="">
        <img class="absolute w-[150px] bottom-20 left-0 -translate-x-1/2" src="assets/images/Banner_shape/Circle.png" alt="">
        <img class="absolute w-[150px] bottom-20 left-[5%] z-40" src="assets/images/Banner_shape/dots.png" alt="">
        <img class="absolute w-[200px] top-0 left-1/2" src="assets/images/Banner_shape/Half_shap_land.png" alt="">
        <img class="absolute w-[200px] top-10 left-[30%] " src="assets/images/Banner_shape/dots.png" alt="">
        <img class="absolute w-[400px] -bottom-[25%] right-[25%] z-40" src="assets/images/Banner_shape/Line_2.png" alt="">
        <img class="absolute w-[200px] bottom-0 right-0 rotate-180" src="assets/images/Banner_shape/Half_shap_land.png" alt="">
        <div class="absolute w-[500px] bottom-0 left-[7%] flex items-center">
            <img class="w-full" src="assets/images/person.png" alt="image">
        </div>
        <div class="absolute top-[25%] right-[10%] text-start">
            <h1 class="text-8xl font-brand font-bold">Are You Looking</h1>
            <h2 class="text-6xl font-brand font-semibold mt-4">for a Lawyer?</h2>
        </div>
        <span class="absolute bottom-[30%] right-[50%] w-10 h-10 rounded-full bg-[#3BA3FC] animate-sliderX duration-200"></span>
        <span class="absolute bottom-[30%] right-[50%] w-10 h-10 rounded-full bg-yellow-200 animate-sliderY duration-200 delay-200"></span>
    </div> -->
</section>

<section class="w-full bg-[#212339]">
    <div class="w-full flex justify-center gap-8 py-10">
            <input type="text" class="w-[250px] py-3 px-4 bg-[#1A1A30] placeholder-white text-white" name="search" placeholder="Keyword Search">
            <select class="w-[250px] py-2 px-4 text-white placeholder:text-white bg-[#1A1A30]" name="category" id="">
                <option value="">Category</option>
                <option value="abc">ABC</option>
                <option value="">BCD</option>
                <option value="">CDA</option>
                <option value="">DAB</option>
            </select>
            <button type="submit" class="w-[250px] py-3 px-2 bg-gradient-to-r from-[#FFA06F] to-[#FF5143] uppercase font-brand font-semibold text-white" >Find Advocate</button>
    </div>
</section>
<section>
    <div class="w-full py-3 px-20 bg-white">
        <div class="flex justify-between py-2">
            <h1 class="text-[#212339] text-3xl font-semibold font-brand">Criminal Lawyer</h1>
            <button type="button" class="py-2 px-4 border-2 border-[#212339] rounded-md text-[#212339]">View All</button>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-5">
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section>
    <div class="w-full py-3 px-20 bg-white">
        <div class="flex justify-between py-2">
            <h1 class="text-[#212339] text-3xl font-semibold font-brand">Corporate Lawyer</h1>
            <button type="button" class="py-2 px-4 border-2 border-[#212339] rounded-md text-[#212339]">View All</button>
        </div>
        <div class="swiper corporateLaw">
            <div class="swiper-wrapper py-5">
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section>
    <div class="w-full py-3 px-20 bg-white">
        <div class="flex justify-between py-2">
            <h1 class="text-[#212339] text-3xl font-semibold font-brand">Criminal Lawyer</h1>
            <button type="button" class="py-2 px-4 border-2 border-[#212339] rounded-md text-[#212339]">View All</button>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-5">
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section>
    <div class="w-full py-3 px-20 bg-white">
        <div class="flex justify-between py-2">
            <h1 class="text-[#212339] text-3xl font-semibold font-brand">Criminal Lawyer</h1>
            <button type="button" class="py-2 px-4 border-2 border-[#212339] rounded-md text-[#212339]">View All</button>
        </div>
        <div class="swiper criminalLaw">
            <div class="swiper-wrapper py-5">
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
              <div class="swiper-slide border box shadow-lg shadow-[#212339]  overflow-hidden">
                <div class="w-[50%]">
                    <img src="assets/images/person.png" class="duration-300" alt="">
                </div>
                <div class="contact flex flex-col m-auto text-left p-2">
                    <h3 class="text-lg font-semibold duration-200">Shawon Ahemd Swagoto</h3>
                    <h4 class="text-lg">Dhaka, Bangladesh</h4>
                    <h4 class="text-lg">Lawyer Type: Criminal</h4>
                    <a href="{{route('lawyer_profile')}}" class="mt-2 text-black underline">View Profile</a>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="py-3 w-full px-20">
    <div class="flex justify-between">
        <h1 class="text-[#212339] text-3xl font-semibold font-brand">Lawyer's List</h1>
        <button type="button" class="py-2 px-4 border-2 border-[#212339] rounded-md text-[#212339]">View All</button>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-4">
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
        <div class="bg-slate-600 p-2 h-40 flex justify-start gap-3">
            <div class="image w-1/3 overflow-hidden">
                <img src="assets/images/p1.jpg" alt="">
            </div>
            <div class=" text-start">
                <h1 class="text-xl font-bold text-white">Imran Hossain</h1>
                <h4 class="text-lg text-white">Land Lawyer</h4>
                <h4 class="text-lg text-white">Dhaka, Bangladesh</h4>
                <a href="{{route('lawyer_profile')}}" class="mt-2 text-white underline">View Profile</a>
            </div>
        </div>
    </div>
</section>
@endsection