@extends('layout.main')

@section('container')
    <div class="mb-6">
        <h1 class="block text-2xl mb-3 text-gray-700 tracking-tight font-semibold">
            Umpan balik dari lulusan
        </h1>
        <hr>
    </div>
    <form action="{{ route('kuisioner.postcreate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Kuisioner A1-13 -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Nama</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A1" placeholder="e.g. Irsyad Ganteng" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">NIM</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A2" placeholder="e.g. 3312101067" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Tahun masuk (terdaftar) di Polibatam</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A3" placeholder="e.g. 2021" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Kelas</label>
            <div class="block items-center gap-x-4" value="">
                <div>
                    <input type="radio" name="A4" value="Reguler Pagi" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Reguler Pagi</label>
                </div>
                <div>
                    <input type="radio" name="A4" value="Karyawan Malam" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Karyawan Malam</label>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Jurusan</label>
            <select name="A5" class="w-full lg:w-96 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option>--Pilih Jurusan--</option>
                <option>Teknik Informatika</option>
                <option>Teknik Elektro</option>
                <option>Teknik Mesin</option>
                <option>Management Bisnis</option>
            </select>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Prodi</label>
            <select  name="A6" class="w-full lg:w-96 border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option>--Pilih Prodi--</option>
                <option>Akuntansi</option>
                <option>Akuntansi Manajerial</option>
                <option>Administrasi Bisnis Terapan</option>
                <option>Teknik Informatika</option>
                <option>Teknik Geomatika</option>
                <option>Teknik Multimedia Jaringan</option>
                <option>Animasi</option>
                <option>Rekayasa Keamanan Siber</option>
                <option>Teknologi Rekayasa Perangkat Lunak</option>
                <option>Teknik Elektronika Manufaktur</option>
                <option>Teknik Elektronika</option>
                <option>Teknik Instrumentasi</option>
                <option>Teknik Mekatronika</option>
                <option>Teknik Robotika</option>
                <option>Teknik Mesin</option>
                <option>Teknik Perencanaan dan Konstruksi Kapal</option>
                <option>Teknik Perawatan Pesawat Udara</option>
                <option>Teknik Rekayasa Pembangkit Energi</option>
            </select>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Bulan dan Tahun Lulus dari Polibatam</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A7" placeholder="e.g. Maret 2022" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Indeks Prestasi Kumulatif (IPK) saat lulus
            </label>
            <div class="flex flex-col items-start">
                <input type="text" name="A8" placeholder="e.g. 3,95" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Usia(Tahun)</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A9" placeholder="e.g. 19" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Jenis Kelamin</label>
            <div class="block items-center gap-x-4">
                <div>
                    <input type="radio" name="A10" value="Laki-Laki" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Laki-Laki</label>
                </div>
                <div>
                    <input type="radio" name="A10" value="Perempuan" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Alamat tempat tinggal sekarang (termasuk Kota dan Kode Pos)
            </label>
            <div class="flex flex-col items-start">
                <input type="text" name="A11" placeholder="e.g. Nusa Jaya Blok B7 No 6, Batam, 29444" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Email</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A12" placeholder="e.g. irsyadnap33@gmail.com" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">No. HP/WA yang aktif</label>
            <div class="flex flex-col items-start">
                <input type="text" name="A13" placeholder="e.g. 0878xxxxxxxx" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- Kuisioner A1-13 END -->

        <!-- Kuisioner KA 1-15 -->
        <div class="mb-8">
            <label for="" class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Bagaimana kepuasan Anda terhadap kondisi pembelajaran di Politeknik Negeri Batam?</label>
            <!-- Pertanyaan KA1 -->
            <div class="ml-4 md:ml-6">
                <label for="" class="text-sm text-gray-700">Kualitas pendidik/guru/dosen/instruktur</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka1" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka1" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka1" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka1" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka1" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA2-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kesempatan berkomunikasi di luar kelas dengan pendidik/guru/dosen/instruktur</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka2" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka2" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka2" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka2" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka2" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA3-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Bimbingan akademik secara umum</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka3" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka3" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka3" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka3" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka3" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA4-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Bimbingan untuk menghadapi ujian akhir</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka4" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka4" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka4" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka4" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka4" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA5 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Materi pelajaran/mata kuliah</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka5" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka5" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka5" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka5" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka5" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA6-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Keberagaman program studi/bidang keahlian/keterampilan yang ditawarkan</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka6" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka6" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka6" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka6" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka6" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA7-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Sistem penilaian</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka7" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka7" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka7" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka7" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka7" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA8-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Penekanan pada praktik dan praktikum</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka8" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka8" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka8" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka8" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka8" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA9-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Metode pengajaran</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka9" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka9" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka9" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka9" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka9" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA10-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Koleksi buku perpustakaan</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka10" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka10" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka10" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka10" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka10" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA11-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Ketersediaan bahan ajar</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka11" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka11" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka11" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka11" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka11" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA12-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kualitas dari fasilitas yang disediakan</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka12" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka12" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka12" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka12" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka12" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA13-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kualitas program magang</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka13" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka13" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka13" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka13" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka13" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA14-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kualitas pembelajaran bahasa asing</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka14" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka14" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka14" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka14" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka14" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
            <!-- Pertanyaan KA15-->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Program pengembangan budaya kerja/karakter/soft skill</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka15" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka15" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka15" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka15" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka15" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan End-->
        </div>
        <!-- Kuisioner End 1-15 END -->

        <!-- Kuisioner KA 16 -->
        <div class="mb-5">
            <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Bagaimana Anda mendapatkan instansi/lembaga/perusahaan untuk magang selama studi?</label>
            <div class="block items-center gap-x-4" value="">
                <div>
                    <input type="radio" name="ka16" value="Permintaan industri melalui informasi yang didapat dari situs umum" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Permintaan industri melalui informasi yang didapat dari situs umum</label>
                </div>
                <div>
                    <input type="radio" name="ka16" value="Permintaan industri melalui informasi dari institusi pendidikan" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Permintaan industri melalui informasi dari institusi pendidikan</label>
                </div>
                <div>
                    <input type="radio" name="ka16" value="Ditempatkan di satuan pendidikan" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Ditempatkan di satuan pendidikan</label>
                </div>
                <div>
                    <input type="radio" name="ka16" value="Mencari Sendiri" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">Mencari Sendiri</label>
                </div>
            </div>
        </div>
        <!-- Kuisioner KA 16 END -->

        <!-- Kuisioner KA 17-24 -->
        <div class="mb-8">
            <label for="" class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Menurut Anda, bagaimana kualitas magang selama studi?</label>
            <!-- Pertanyaan KA17 -->
            <div class="ml-4 md:ml-6">
                <label for="" class="text-sm text-gray-700">Penempatan magang oleh Politeknik Negeri Batam</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                    <input type="radio" name="ka17" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">1</label>
                    <input type="radio" name="ka17" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">2</label>
                    <input type="radio" name="ka17" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">3</label>
                    <input type="radio" name="ka17" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">4</label>
                    <input type="radio" name="ka17" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                    <label for="" class="text-sm text-gray-700">5</label>
                </div>
            </div>
            <!-- Pertanyaan KA17 END -->
            <!-- Pertanyaan KA18 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kejelasan kegiatan selama magang</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka18" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka18" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka18" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka18" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka18" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA18 END -->
            <!-- Pertanyaan KA19 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Sarana praktik di tempat magang</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka19" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka19" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka19" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka19" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka19" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA19 END -->
            <!-- Pertanyaan KA20 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Bimbingan selama magang</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka20" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka20" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka20" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka20" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka20" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA20 END -->
            <!-- Pertanyaan KA21 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Evaluasi setelah selesai magang</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka21" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka21" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka21" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka21" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka21" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA21 END -->
            <!-- Pertanyaan KA22 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Penyaluran bekerja setelah selesai magang</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka22" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka22" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka22" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka22" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka22" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA22 END -->
            <!-- Pertanyaan KA23 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kesesuaian tugas magang dengan prodi/bidang keahlian/jenis keterampilan</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka23" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka23" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka23" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka23" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka23" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA23 END -->
            <!-- Pertanyaan KA24 -->
            <div class="ml-4 md:ml-6 mt-2">
                <label for="" class="text-sm text-gray-700">Kurikulum berstandar industri</label>
                <div class="flex items-center gap-x-4 border w-fit p-1 rounded-md px-3">
                  <input type="radio" name="ka24" id="" value="Sangat Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">1</label>
                  <input type="radio" name="ka24" id="" value="Tidak Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">2</label>
                  <input type="radio" name="ka24" id="" value="Cukup" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">3</label>
                  <input type="radio" name="ka24" id="" value="Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">4</label>
                  <input type="radio" name="ka24" id="" value="Sangat Baik" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                  <label for="" class="text-sm text-gray-700">5</label>
              </div>
            </div>
            <!-- Pertanyaan KA24 END -->
        </div>
        <!-- Kuisioner KA 17-24 END -->

        <!-- Pertanyaan KA25 -->
        <fieldset>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold text-md tracking-tight font-sans">Apakah Anda memiliki sertifikat kompetensi?</label>
                <div class="block items-center gap-x-4">
                    <div>
                        <input type="radio" name="ka25" value="Ya" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="sertif(0)">
                        <label for="" class="text-sm text-gray-700">Ya</label>
                    </div>
                    <div>
                        <input type="radio" name="ka25" value="Tidak" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800" onclick="sertif(1)">
                        <label for="" class="text-sm text-gray-700">Tidak</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- Pertanyaan KA25 END -->

        <!-- Pertanyaan Sertifikasi Lanjutan -->
        <div id="sertifikasi" style="display: none">
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Apakah jenis sertifikat kompetensi yang dimiliki? (bisa diisi lebih dari satu)</label>
                <div class="flex flex-col items-start">
                    <input type="text" name="kb1" placeholder="e.g. Sertifikat" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
                </div>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">Dari manakah sertifikat kompetensi yang dimiliki? (bisa diisi lebih dari satu)<label>
                <div class="block items-center gap-x-4 font-normal">
                    <div>
                        <input type="checkbox" name="kb2" value="Diterbitkan oleh Politeknik Negeri Batam" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                        <label for="" class="text-sm text-gray-700">Diterbitkan oleh Politeknik Negeri Batam</label>
                    </div>
                    <div>
                        <input type="checkbox" name="kb3" value="Diterbitkan oleh lembaga lain yang bermitra dengan Politeknik Negeri Batam" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                        <label for="" class="text-sm text-gray-700">Diterbitkan oleh lembaga lain yang bermitra dengan Politeknik Negeri Batam</label>
                    </div>
                    <div>
                        <input type="checkbox" name="kb4" value="Melalui kegiatan dan biaya mandiri" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm text-gray-800">
                        <label for="" class="text-sm text-gray-700">Melalui kegiatan dan biaya mandiri</label>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2 text-md tracking-tight font-sans">Silahkan upload sertifikat yang anda miliki (Jadikan PDF jika lebih dari 1 file) <br>
                Nama file: NIM_Jenis Sertifikasi <br>
                (Contoh: 1234_FinancialPlanner)
                </label>
                <input name="kb5" type="file" id="formFileMultiple" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm placeholder-gray-400/50 w-full lg:w-96">
            </div>
        </div>
        <!-- Pertanyaan Sertifikasi Lanjutan END -->
        <!-- Button -->
        <hr>
        <div class="grid justify-end mt-5">
            <button type="submit" class="inline-flex items-center justify-center h-10 px-6 font-medium tracking-wide text-white shadow-md transition duration-200 bg-gray-800 rounded-lg hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                <span>Next</span>
            </button>
        </div>
        <!-- Button -->
    </form>
    <!--FORM-->
@endsection