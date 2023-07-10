@extends('layout')

@section('main')
<div class="flex flex-wrap justify-center m-5 p-3">
  <h1 class="font-light font-sans text-3xl text-gray-500 text-center m-3 p-3">Dashboard Halaman Kost Grace</h1>
</div>

<div class="flex justify-center ">
  <table class="shadow-lg bg-slate-300 rounded-xl">
    <thead>
      <tr>
        <th class="bg-sky-300 border text-center px-8 py-4 rounded-tl-xl">#</th>
        <th class="bg-sky-300 border text-center px-8 py-4 rounded">Nama Penghuni</th>
        <th class="bg-sky-300 border text-center px-8 py-4 rounded-tr-xl">Kamar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border px-6 py-4">1</td>
        <td class="border px-6 py-4">Kinaya</td>
        <td class="border px-6 py-4">G1</td>
      </tr>

    </tbody>
  </table>

</div>

<div class="relative">
  <div class="fixed bottom-52 left-32 right-0">
    <p class="font-thin">
      {{ $test }}
    </p>
  </div>
</div>

@endsection