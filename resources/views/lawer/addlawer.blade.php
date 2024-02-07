<x-app-layout>
<div>
<form method="POST" action="{{route('store.addlawer')}} " enctype="multipart/form-data">
  @csrf
   <label for="lfirm">Law Firm:</label><br>
  <input class="w-[400px] rounded-md " type="text" id="lfirm" name="lfirm"><br>

  <label for="lname">Lawer Name:</label><br>
  <input class="w-[400px] rounded-md" type="text" id="lname" name="lname"><br>

  <label for="laddress">Address:</label><br>
  <input class="w-[400px] rounded-md" type="text" id="laddress" name="laddress"><br>

  <label for="lnumber">Number:</label><br>
  <input class="w-[400px] rounded-md" type="number" id="lnumber" name="lnumber"><br>

  <label for="lemail">Email:</label><br>
  <input class="w-[400px] rounded-md" type="email" id="lemail" name="lemail"><br>

  <label for="llanguage">Language:</label><br>
  <select class="w-[400px] rounded-md" name="llanguage" id="llanguage">
  <option value="Select">Select</option>
  <option value="Bangla">Bangla</option>
 <option value="English">English</option>
 <option value="Hindi">Hindi</option>
</select><br>

<label for="lcategory">Category:</label><br>
  <select class="w-[400px] rounded-md" name="lcategory" id="lcategory">
  <option value="Select">Select</option>
  @forelse($categories as $cat)
  <option value="{{$cat->id}}">{{$cat->category}}</option>
  @empty
  <option value="">No Data Found</option>
  @endforelse
</select><br>

<label for="ldetails">Details:</label><br>
  <div class="w-[400px] rounded-md">
  <textarea  class="w-[400px] rounded-md" name="ldetails" id="ckeditor" name="ldetails"></textarea>
  </div><br>
  
<button type="submit" class="w-[150px] py-3 px-2 bg-gradient-to-r from-[#FFA06F] to-[#FF5143] uppercase font-brand font-semibold text-white">submit</button>
</form>
</div>
<script src="{{asset('assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>


</x-app-layout>