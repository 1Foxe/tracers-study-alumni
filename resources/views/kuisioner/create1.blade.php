@extends('layout.main')

@section('container')
<!-- Header -->
<div class="mb-6">
    <h1 class="block text-2xl mb-3 text-gray-700 tracking-tight font-semibold">
        Pendataan ketenagakerjaan
    </h1>
    <hr>
</div>
<!-- Header End -->

<!-- Form -->
<form action="{{ route('kuisioner.postcreate1') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Fieldset -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Apakah saat ini Anda sudah bekerja?</label>
            <div class="block items-center gap-x-4" value="">
                <div>
                    <input type="radio" name="C1" value="Sudah" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="kerja(0)">
                    <label for="" class="text-sm text-gray-700">Sudah</label>
                </div>
                <div>
                    <input type="radio" name="C1" value="Belum" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="kerja(1)">
                    <label for="" class="text-sm text-gray-700">Belum</label>
                </div>
            </div>
        </div>
    <!-- Fieldset End--> 

    <!-- Pertanyaan Lanjutan --> 
    <div id="datakerja" style="display: none">
        <!-- C2 --> 
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Apakah anda bekerja di tempat magang?</label>
            <div class="block items-center gap-x-4">
                <div>
                    <input type="radio" name="C2" value="Ya" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Ya</label>
                </div>
                <div>
                    <input type="radio" name="C2" value="Tidak" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Tidak</label>
                </div>
            </div>
        </div>
        <!-- C2 End -->

        <!-- C3 --> 
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Bulan dan tahun mulai bekerja</label>
            <div class="flex flex-col items-start">
                <input type="text" name="C3" placeholder="e.g. Mei 2022" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- C3 End -->

        <!-- C4 --> 
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Skala perusahaan tempat anda bekerja</label>
            <div class="block items-center gap-x-4">
                <div>
                    <input type="radio" name="C4" value="Lokal" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Lokal</label>
                </div>
                <div>
                    <input type="radio" name="C4" value="Nasional" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Nasional</label>
                </div>
                <div>
                    <input type="radio" name="C4" value="Multinasional atau internasional" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Multinasional atau internasional</label>
                </div>
            </div>
        </div>
        <!-- C4 End -->

        <!-- C5 --> 
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Bagian dan posisi atau jabatan di tempat kerja anda sekarang</label>
            <div class="flex flex-col items-start">
                <input type="text" name="C5" placeholder="e.g. Bagian Production, jabatan operator" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- C5 End -->

        <!-- C6 --> 
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Penghasilan (takehomepay) yang diterima per bulan</label>
            <div class="block items-center gap-x-4">
                <div>
                    <input type="radio" name="C6" value="< 1 Juta" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">< 1 Juta</label>
                </div>
                <div>
                    <input type="radio" name="C6" value="1-5 Juta" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">1-5 Juta</label>
                </div>
                <div>
                    <input type="radio" name="C6" value="> 5 Juta" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">> 5 Juta</label>
                </div>
            </div>
        </div>
        <!-- C6 End -->
    </div>
    <!-- Pertanyaan Lanjutan End-->
    <!-- Bottom -->
    <hr>
    <div class="grid justify-end mt-5">
        <button type="submit" class="inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-white shadow-md transition duration-200 bg-gray-800 rounded-lg hover:bg-gray-700 focus:shadow-outline focus:outline-none">
            <span>Next</span>
        </button>
    </div>
    <!-- Bottom End -->
</form>
<!-- Form End -->


@endsection