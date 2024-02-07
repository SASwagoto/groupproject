@extends('layouts.web')

@section('content')
    <section class="py-10 px-20">
      <div class="bg-[#212339] py-3 flex justify-center gap-4">
        <form
          action="#"
          method="post"
          class="flex justify-center gap-6 items-center"
        >
          <h2 class="text-white font-brand text-lg">Find a Law Firm:</h2>
          <input type="text" class="py-2 px-4" placeholder="Type Any Word(s)" />
          <input
            type="text"
            class="py-2 px-4"
            placeholder="City, State or Country"
          />
          <button
            type="submit"
            class="uppercase py-2 px-4 bg-[#D47D07] text-white font-bold"
          >
            Search
          </button>
        </form>
      </div>
    </section>
    <section class="px-20">
      <div class="flex justify-between">
        <div class="info">
          <h4 class="font-semibold text-xl">
            Full Services Law Firm In Dhaka, Bangladesh
          </h4>
          <h2 class="font-bold text-4xl">Shawon Ahmed Swagoto</h2>
          <p class="w-96 text-xl my-6">
            12, Sonartori Tower, Level-9, Bir Uttom C.R. Datta Road,
            Banglamotor, Dhaka-1000
          </p>
          <a class="text-xl block" href="tel:01770921384">01770921384</a>
          <a class="text-xl block" href="#">www.swagoto.com</a>
        </div>
        <div class="rounded-xl w-80 overflow-hidden">
          <img class="w-full" src="assets/images/Profile_image.jpg" alt="" />
        </div>
      </div>
    </section>
    <section class="px-20 mt-10 w-full">
      <h2 class="bg-[#212339] text-white w-fit py-2 px-4 rounded-t-lg">
        Lawyer's Profile
      </h2>
      <div class="border border-[#212339] p-3">
        <div class="border-b border-dashed border-[#212339] w-fit">
          <h2 class="text-2xl font-semibold">
            Dhaka Law Services Limited Overview
          </h2>
        </div>
        <div class="flex flex-col gap-3 text-xl my-4">
          <p>
            China Law Service (Wuhan) Limited is a law firm licensed to provide
            legal and consulting services in China. The legal team has an
            in-depth understanding and knowledge of regional legal culture and
            market dynamics. With more than 20 years of practicing law in China,
            the firm's clientele is both domestic and foreign.
          </p>
          <p>
            China Law Service has advised on significant investments,
            international trades, real estate projects, arbitrations,
            litigations, and individual needs including divorce, employment, and
            immigration. The lawyers' expertise allows them to simplify complex
            business matters. China Law Service's method is to partner with
            clients in order to achieve cost-effective and timely delivery of
            optimal effective solutions.
          </p>
          <p>
            Integrity and personal responsibility are central to China Law
            Services. The lawyers listen to the clients' needs and work closely
            with them to understand their particular industry and each
            individual circumstance. Determining the right solution at the right
            time is critical to the success of clients at China Law Service.
          </p>
        </div>
        <h4 class="text-lg font-semibold">Languages: English, Mandarin.</h4>

        <div class="border-b border-dashed border-[#212339] w-fit mt-4">
          <h2 class="text-2xl font-semibold">
            Dhaka Law Services Limited Areas of Law
          </h2>
        </div>

        <div class="relative overflow-x-auto my-4">
          <table class="w-full text-left rtl:text-right text-gray-500 dark:text-gray-400 text-xl">
            <tbody>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Bankruptcy
                </th>
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4"></td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" >
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Business Law
                </th>
                <td class="px-6 py-4">Banking & Finance
                    Business Formation
                    Commercial Law</td>
                <td class="px-6 py-4">Contracts
                    Corporate Law
                    Mergers & Acquisitions</td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                Criminal Defense
                </th>
                <td class="px-6 py-4">Drug Crime</td>
                <td class="px-6 py-4">Sex Crimes</td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                Employment
                </th>
                <td class="px-6 py-4">Wrongful Termination</td>
                <td class="px-6 py-4"></td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                Estate Planning
                </th>
                <td class="px-6 py-4">Will & Probate</td>
                <td class="px-6 py-4"></td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                Family Law
                </th>
                <td class="px-6 py-4">Divorce</td>
                <td class="px-6 py-4"></td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                Immigration
                </th>
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    @endsection