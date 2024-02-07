<x-app-layout>
    <form action="{{route('store.addcategory')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col justify-center items-center m-auto border-2 w-[500px] mt-[100px] bg-[#fef08a] rounded-[20px]">
            <span class="text-center font-black text-[20px] mb-[20px] pt-[20px]">Add Category</span>
            <input class="w-[400px]  mb-[20px] rounded-[10px]" type="text" name="category">
            <button class="uppercase py-2 px-4 bg-[#D47D07] text-white font-bold mt-3 w-32 items-center mb-[20px] rounded-[10px]" type="submit">Submit</button>
        </div>
    </form>
</x-app-layout>