@extends('layout.main')

@section('container')
<div class="mb-6">
    <h1 class="block text-2xl mb-3 text-gray-700 tracking-tight font-semibold">
        Pertanyaan kewirausahaan
    </h1>
    <hr>
</div>
<form action="{{ route('kuisioner.postcreate2') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Fieldset -->
    <div class="mb-5">
        <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Apakah memiliki usaha atau berwirausaha?</label>
        <div class="block items-center gap-x-4">
            <div>
                <input type="radio" name="D1" value="Ya" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="wirausaha(0)">
                <label for="" class="text-sm text-gray-700">Ya</label>
            </div>
            <div>
                <input type="radio" name="D1" value="Tidak" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="wirausaha(1)">
                <label for="" class="text-sm text-gray-700">Tidak</label>
            </div>
        </div>
    </div>
    <!-- Fieldset End -->

    <!-- Pertanyaan Lanjutan -->
    <div id="datawirausaha" style="display: none">
        <!-- D2 -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Tahun memulai usaha atau berwirausaha</label>
            <div class="flex flex-col items-start">
                <input type="text" name="D2" placeholder="e.g. 2022" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- D2 End -->

        <!-- D3 -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Jenis usaha/perusahaan</label>
            <div class="block items-center gap-x-4">
                <div>
                    <input type="radio" name="D3" value="Jasa" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Jasa</label>
                </div>
                <div>
                    <input type="radio" name="D3" value="Dagang" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Dagang</label>
                </div>
                <div>
                    <input type="radio" name="D3" value="Manufaktur" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Manufaktur</label>
                </div>
                <div>
                    <input type="radio" name="D3" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="document.getElementById('hideText').style.display='block'">
                    <label for="" class="text-sm text-gray-700">Lainnya</label>
                    <input type="text" name="D3" id="hideText" style="display: none" placeholder="e.g. Lainnya" class="mt-2 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
                </div>
            </div>
        </div>
        <!-- D3 End -->

        <!-- D4 -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Nama Usaha/Perusahaan</label>
            <div class="flex flex-col items-start">
                <input type="text" name="D4" placeholder="e.g. CV Abadi, Batam" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- D4 End -->

        <!-- D5 -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Alamat Usaha/Perusahaan</label>
            <div class="flex flex-col items-start">
                <input type="text" name="D5" placeholder="e.g. Jl. Fulan No.9, Nagoya, Batam" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- D5 End -->
    </div>
    <!-- Pertanyaan Lanjutan End -->
    <!-- Bottom -->
    <hr>
    <div class="grid justify-end mt-5">
        <button type="submit" class="inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-white shadow-md transition duration-200 bg-gray-800 rounded-lg hover:bg-gray-700 focus:shadow-outline focus:outline-none">
            <span>Next</span>
        </button>
    </div>
    <!-- Bottom End -->
</form>
@endsection