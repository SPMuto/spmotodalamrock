@extends('layouts.app')

@section('content')

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">

    <div class="bg-white rounded-xl p-5 shadow">
        <h3>Jualan Hari Ini</h3>
        <p class="text-3xl font-bold mt-2">
            RM0.00
        </p>
    </div>

    <div class="bg-white rounded-xl p-5 shadow">
        <h3>Untung Hari Ini</h3>
        <p class="text-3xl font-bold mt-2">
            RM0.00
        </p>
    </div>

    <div class="bg-white rounded-xl p-5 shadow">
        <h3>Jumlah Produk</h3>
        <p class="text-3xl font-bold mt-2">
            0
        </p>
    </div>

    <div class="bg-white rounded-xl p-5 shadow">
        <h3>Stok Rendah</h3>
        <p class="text-3xl font-bold mt-2">
            0
        </p>
    </div>

</div>

@endsection
