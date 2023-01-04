{{-- <span>
    <div class="">
      <div class="-mt-72">
          <img src="images/giconfit.gif" alt="bg-confit">
      </div>
      <div class="flex items-center justify-center -mb-5">
          <img class="w-52" src="images/givsuccess2.gif" alt="Success . . .">
      </div>
      <div class="flex items-center justify-center mb-5 mt-2 text-3xl">🎉🎉🎉</div>
      <div class="text-sm md:text-base leading-relaxed font-sans text-center tracking-tight">{{ session('message') }}</div>
    </div>
</span> --}}

@extends('layout.main')

@section('container')
<div class="bg-green-500 rounded-lg py-5 px-6 mb-4 text-base text-green-700">
    <p>{{ session('message') }}ahhaha</p>
</div>

<div class="flex justify-between">
    <div class="bg-green-100 rounded-lg mx-auto py-5 px-6 mb-3 text-base text-green-700 inline-flex max-w-7xl sm:px-6 lg:px-8" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
        </svg>
        A simple success alert - check it out!
    </div>
</div>

@endsection
