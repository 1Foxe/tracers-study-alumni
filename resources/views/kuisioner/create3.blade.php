@extends('layout.main')

@section('container')
<div class="mb-6">
    <h1 class="block text-2xl mb-3 text-gray-700 tracking-tight font-semibold">
        Prestasi Kuliah
    </h1>
    <hr>
</div>

<form action="{{ route('kuisioner.postcreate3') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Fieldset -->
    <div class="mb-5">
        <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Apakah memiliki prestasi selama kuliah?</label>
        <div class="block items-center gap-x-4">
            <div>
                <input type="radio" name="E1" value="Ya" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="prestasi(0)">
                <label for="" class="text-sm text-gray-700">Ya</label>
            </div>
            <div>
                <input type="radio" name="E1" value="Tidak" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="prestasi(1)">
                <label for="" class="text-sm text-gray-700">Tidak</label>
            </div>
        </div>
    </div>
    <!-- Fieldset End-->
    
    <!-- Pertanyaan Lanjutan -->
    <div id="dataprestasi" style="display: none">
        <!--E2-->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-1">Di bidang apa prestasi yang dimiliki (bisa diisi lebih dari satu)<label>
            <div class="block items-center gap-x-4 font-normal">
                <div>
                    <input type="checkbox" name="E2" value="Akademik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Akademik</label>
                </div>
                <div>
                    <input type="checkbox" name="E21" value="Non Akademik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Non Akademik</label>
                </div>
            </div>
        </div>
        <!--E2 End-->

        <!--E3-->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-1">Tingkat prestasi yang diraih di bidang akademik (bisa diisi lebih dari satu)<label>
            <div class="block items-center gap-x-4 font-normal">
                <div>
                    <input type="checkbox" name="E3" value="Lokal" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Lokal</label>
                </div>
                <div>
                    <input type="checkbox" name="E31" value="Nasional" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Nasional</label>
                </div>
                <div>
                    <input type="checkbox" name="E32" value="Internasional" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Internasional</label>
                </div>
            </div>
        </div>
        <!--E3 End-->

        <!--E4-->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-1">Tingkat prestasi yang diraih di bidang non-akademik (bisa diisi lebih dari satu)<label>
            <div class="block items-center gap-x-4 font-normal">
                <div>
                    <input type="checkbox" name="E4" value="Lokal" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Lokal</label>
                </div>
                <div>
                    <input type="checkbox" name="E41" value="Nasional" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Nasional</label>
                </div>
                <div>
                    <input type="checkbox" name="E42" value="Internasional" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Internasional</label>
                </div>
            </div>
        </div>
        <!--E4 End-->

        <!--E5-->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Juara berapa pada prestasi tersebut (jika ada lebih dari satu, pilih yang paling tinggi)</label>
            <div class="block items-center gap-x-4" value="">
                <div>
                    <input type="radio" name="E5" value="Juara 1" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Juara 1</label>
                </div>
                <div>
                    <input type="radio" name="E5" value="Juara 2" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Juara 2</label>
                </div>
                <div>
                    <input type="radio" name="E5" value="Juara 3" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Juara 3</label>
                </div>
                <div>
                    <input type="radio" name="E5" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="document.getElementById('hideText').style.display='block'">
                    <label for="" class="text-sm text-gray-700">Lainnya</label>
                    <input type="text" name="E5" id="hideText" style="display: none" placeholder="e.g. Juara 4" class="mt-2 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
                </div>
            </div>
        </div>
        <!--E5 End-->
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
@endsection