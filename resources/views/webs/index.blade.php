@extends('layout')

@section('main')
<div class="flex row-span-1 justify-center m-5 p-3">
  <h1 class="font-thin font-sans text-6xl text-gray-500 text-center m-3 p-3 bg-sky-200 rounded">Dashboard</h1>
</div>

<div class="flex justify-center ">
  <table class="shadow-lg bg-slate-300 rounded-xl">
    <thead>
      <tr>
        <th class="bg-sky-300 border  text-center px-8 py-4 rounded-tl-xl">Song</th>
        <th class="bg-sky-300 border text-center px-8 py-4 rounded">Artist</th>
        <th class="bg-sky-300 border text-center px-8 py-4 rounded-tr-xl">Year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
        <td>Malcolm Lockyer</td>
        <td>1961</td>
      </tr>
      <tr>
        <td>Witchy Woman</td>
        <td>The Eagles</td>
        <td>1972</td>
      </tr>
      <tr>
        <td>Shining Star</td>
        <td>Earth, Wind, and Fire</td>
        <td>1975</td>
      </tr>
    </tbody>
  </table>

</div>


@endsection