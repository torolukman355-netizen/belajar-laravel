<x-layout judul="Halaman Kontak">
 

<form action="/tanya" method="POST" class ="p-6 max-w-xl mx-auto">
    @csrf
       <div class="col-span-full">
          <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
          <div class="mt-2">
            <textarea id="about" name="tanya" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 border  border-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
        </div>
        <button type="submit" class="mt-4 px-4 py-2 bg-sky-500 hover:bg-sky-700 text-white font-semibold rounded-lg transition-colors duration-200">kirim</button>
 </form>
 <div class= "mt-6 text-black mx-auto">
<div class="flex justify-between items-center mb-4">
    <h2 class ="font-bold">pertanyaan anda</h2>
    @if(count($tanya2) > 0)
        <a href="/tanya/hapus" class="px-3 py-2 border border-red-400 hover:bg-red-700 text-black text-sm font-semibold rounded-lg transition-colors duration-200">Hapus Semua</a>
    @endif
</div>
<ul>
    @foreach($tanya2 as $tanya)
       <li class = "text-sm">{{$tanya}}</li>
    @endforeach
</ul>
 </div>
</x-layout>
