@extends('layouts.app')

@section('title', 'Detail')

@section('header')
    @include('components.navbar')
    <img src="{{ asset('storage/stick.png') }}" alt="stick" class="w-full">
@endsection

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" x-data="{ active: 'Lapangan' }">
        <div class="relative">
            <img src="{{ asset('storage/' . $venue->large_image) }}" class="mt-6" alt="{{ $venue->large_image }}">
            <img src="{{ asset('storage/' . $venue->logo_image) }}" class="absolute bottom-3 left-10 m-4 w-24"
                alt="{{ $venue->logo_image }}">
        </div>
        <h1 class="font-bold text-2xl mt-5">{{ $venue->name }}</h1>
        <ul class="flex gap-x-2 mt-1">
            @foreach ($venue->sports as $sport)
                <li>
                    <a href="#" class="underline text-my-red font-bold">{{ $sport->name }}</a>
                    @if (!$loop->last)
                        <span class="text-black font-semibold">,</span>
                    @endif
                </li>
            @endforeach
            <li class="font-semibold">in <a href="#"
                    class="cursor-pointer underline text-my-red font-bold">{{ $venue->city }}</a></li>
        </ul>
        {{-- Komponen share --}}
        @include('components.share')

        <ul class="flex justify-center items-center my-16 gap-x-40 font-bold border-t border-b w-full">
            <li :class="{ 'bg-my-red text-white p-3 rounded-lg': active === 'Lapangan' }" @click="active = 'Lapangan'"
                class="cursor-pointer">Lapangan</li>
            <li :class="{ 'bg-my-red text-white p-3 rounded-lg': active === 'About' }" @click="active = 'About'"
                class="cursor-pointer">About</li>
            <li :class="{ 'bg-my-red text-white p-3 rounded-lg': active === 'Rules' }" @click="active = 'Rules'"
                class="cursor-pointer">Rules</li>
            <li :class="{ 'bg-my-red text-white p-3 rounded-lg': active === 'Gallery' }" @click="active = 'Gallery'"
                class="cursor-pointer">Gallery</li>
        </ul>

        <div x-show="active === 'Lapangan'">
            <h2 class="font-bold text-2xl my-5">Field</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-y-5 2xl:grid-cols-4 gap-10 2xl:gap-7">
                @foreach ($venue->fields as $index => $field)
                    @php
                        $prices = $field->schedules->pluck('price')->toArray();
                        $minPrice = !empty($prices) ? min($prices) : 0;
                        $maxPrice = !empty($prices) ? max($prices) : 0;
                    @endphp
                    <div class="flex flex-col {{ $index % 2 == 1 ? 'ms-auto' : 'me-auto' }} mb-14">
                        <div class="flex flex-col items-center gap-y-4">
                            <img src="{{ asset('storage/' . $field->image) }}" class="w-[500px] h-[415px]"
                                alt="{{ $field->name }}">
                            <h3 class="font-bold mb-1 text-lg">{{ $field->name }}</h3>
                            <p class="font-semibold text-grey-56">
                                Rp {{ number_format($minPrice, 0, ',', '.') }} ~ Rp
                                {{ number_format($maxPrice, 0, ',', '.') }}
                            </p>
                            <button
                                class="bg-my-red shadow-xl font-bold ms-2 w-[18.75rem] rounded-xl text-white py-3 px-5">Lihat
                                Jadwal</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div x-show="active === 'About'">
            <h2 class="font-bold text-2xl my-5">About</h2>
            
        </div>

        <div x-show="active === 'Rules'">
            <h2 class="font-bold text-2xl my-5">Rules</h2>
        </div>

        <div x-show="active === 'Gallery'">
            <h2 class="font-bold text-2xl my-5">Gallery</h2>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
