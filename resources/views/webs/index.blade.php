@extends('layout')

@section('main')
<div class="row-span-1">
  
  <h1 class="font-bold font-sans text-6xl text-red-300 text-center">Dashboard</h1>
</div>
<table class="table-auto items-center p-40">
    <thead>
      <tr class="font-sans">
        <th>Song</th>
        <th>Artist</th>
        <th>Year</th>
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
    
@endsection

