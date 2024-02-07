<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3">
<<<<<<< HEAD
        <a href="{{route('admin.addcategory')}}"><button type="button" class="w-[250px] py-3 px-2 bg-gradient-to-r from-[#FFA06F] to-[#FF5143] uppercase font-brand font-semibold text-white">Add Category </button></a>
        <a href="#"><button type="button" class="w-[250px] py-3 px-2 bg-gradient-to-r from-[#FFA06F] to-[#FF5143] uppercase font-brand font-semibold text-white">Add Lawer </button></a>
=======
        <a href="#"><button type="button" class="w-[250px] py-3 px-2 bg-gradient-to-r from-[#FFA06F] to-[#FF5143] uppercase font-brand font-semibold text-white">Add Category </button></a>
        <a href="{{route('addlawer')}}"><button type="button" class="w-[250px] py-3 px-2 bg-gradient-to-r from-[#FFA06F] to-[#FF5143] uppercase font-brand font-semibold text-white">Add Lawer </button></a>
>>>>>>> 50adfda6e44e7344fa26028451f647fd8f428f5d
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
