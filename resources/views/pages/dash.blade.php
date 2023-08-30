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
                <th class="bg-sky-300 border text-center px-8 py-4 rounded">Kamar</th>
                <th class="bg-sky-300 border text-center px-8 py-4 rounded-tr-xl">Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($latest_placements as $placement)

            <tr>
                <td class="border px-6 py-4">{{ $loop->iteration }}</td>
                <td class="border px-6 py-4">{{ $placement->occupant ? $placement->occupant->name:'' }}</td>
                <td class="border px-6 py-4">{{ $placement->room->code }}</td>
                <td>
                    @if(!empty($placement->check_in_date))
                    {{ date('d/m/Y', strtotime($placement->check_in_date)) }}
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td class="border px-5 py-5 row-auto">Belum ada data</td>
            </tr>

            @endforelse


            {{-- <tr>
                <td class="border px-6 py-4">1</td>
                <td class="border px-6 py-4">Kinaya</td>
                <td class="border px-6 py-4">G1</td>
            </tr> --}}

        </tbody>
    </table>

</div>

{{-- <div class="relative">
    <div class="fixed bottom-52 right-50">
        <p class="font-thin">
            {{ $test }}
        </p>
    </div>
</div> --}}

@endsection
