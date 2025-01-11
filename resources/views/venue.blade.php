@extends('layouts.app')

@section('header')
    @include('components.navbar')
    <img src="{{ asset('storage/rectangle.png') }}" alt="Rectangle">
@endsection

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="font-bold mt-12 mb-8 text-xl">BARU <span class="text-[#E72929]">DITAMBAHKAN</span></h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-10 2xl:gap-7">
            <div class="flex flex-col">
                <a href="#"><img src="{{ asset('storage/1.png') }}" alt="">
                    <div class="ms-2 mt-5">
                        <h3 class="font-bold mb-1 text-lg">INSPIRE ARENA SULUT</h3>
                        <p class="font-semibold mb-1">Manado</p>
                        <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp. 125,000</span></p>
                    </div></a>
            </div>
            <div class="flex flex-col">
                <a href="#"><img src="{{ asset('storage/2.png') }}" alt="">
                    <div class="ms-2 mt-5">
                        <h3 class="font-bold mb-1 text-lg">INSPIRE ARENA SULUT</h3>
                        <p class="font-semibold mb-1">Manado</p>
                        <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp. 125,000</span></p>
                    </div></a>
            </div>
            <div class="flex flex-col">
                <a href="#"><img src="{{ asset('storage/3.png') }}" alt="">
                    <div class="ms-2 mt-5">
                        <h3 class="font-bold mb-1 text-lg">INSPIRE ARENA SULUT</h3>
                        <p class="font-semibold mb-1">Manado</p>
                        <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp. 125,000</span></p>
                    </div></a>
            </div>
            <div class="flex flex-col">
                <a href="#"><img src="{{ asset('storage/4.png') }}" alt="">
                    <div class="ms-2 mt-5">
                        <h3 class="font-bold mb-1 text-lg">INSPIRE ARENA SULUT</h3>
                        <p class="font-semibold mb-1">Manado</p>
                        <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp. 125,000</span></p>
                    </div></a>
            </div>
            <div class="flex flex-col">
                <a href="#"><img src="{{ asset('storage/5.png') }}" alt="">
                    <div class="ms-2 mt-5">
                        <h3 class="font-bold mb-1 text-lg">INSPIRE ARENA SULUT</h3>
                        <p class="font-semibold mb-1">Manado</p>
                        <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp. 125,000</span></p>
                    </div></a>
            </div>
            <div class="flex flex-col">
                <a href="#"><img src="{{ asset('storage/6.png') }}" alt="">
                    <div class="ms-2 mt-5">
                        <h3 class="font-bold mb-1 text-lg">INSPIRE ARENA SULUT</h3>
                        <p class="font-semibold mb-1">Manado</p>
                        <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp. 125,000</span></p>
                    </div></a>
            </div>
        </div>
    </div>
    @endsection

@section('footer')
    @include('components.footer')
@endsection
