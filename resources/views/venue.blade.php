@extends('layouts.app')

@section('header')
    @include('components.navbar')
    <img src="{{ asset('storage/stick.png') }}" alt="stick" class="w-full">
@endsection

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <h1 class="font-bold mt-12 mb-8 text-2xl justify-center flex">BOOKING <span class="text-[#E72929] px-2">VENUE</span>
            OLAHRAGA TERBAIK</h1>
        <h2 class="font-bold mt-12 mb-8 text-xl">BARU <span class="text-[#E72929]">DITAMBAHKAN</span></h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-10 2xl:gap-7">
            @foreach ($venues as $venue)
                @php
                    $prices = $venue->fields
                        ->flatMap(function ($field) {
                            return $field->schedules->pluck('price');
                        })
                        ->toArray();
                    $minPrice = !empty($prices) ? min($prices) : 0;
                @endphp
                <div class="flex flex-col">
                    <a href="/v/{{ $venue->slug }}">
                        <img src="{{ asset('storage/' . $venue->image) }}" alt="{{ $venue->name }}">
                        <div class="ms-2 mt-5">
                            <h3 class="font-bold mb-1 text-lg">{{ $venue->name }}</h3>
                            <p class="font-semibold mb-1">{{ $venue->city }}</p>
                            <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp.
                                    {{ number_format($minPrice, 0, ',', '.') }}</span></p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $venues->links() }}
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection