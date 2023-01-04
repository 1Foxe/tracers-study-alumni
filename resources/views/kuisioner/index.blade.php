@extends('layout.main')

@section('container')
    <br>
    @if (session('message'))
    <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
        </svg>
        {{ session('message') }}
    </div>
    @endif
    <div class="mt-4">
        <h3>Kembali Ke Halaman Awal</h3>
        <a href="/">
            <button class="text-white group px-4 lg:px-6 py-2 lg:py-3 my-1 lg:my-2 flex items-center hover:bg-[#65b7de] hover:border-[#65b7de] relative font-medium group">
                <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-gray-100 border-2 border-[#65b7de] group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                <span class="absolute inset-0 w-full h-full bg-[#65b7de] border-1 group-hover:bg-[#65b7de]"></span>
                <span class="relative text-white group-hover:text-white font-bold">Home 🚀</span>
                <span class="group-hover:rotate-90 duration-300"></span>
            </button>
        </a>
    </div>
    <br>
@endsection