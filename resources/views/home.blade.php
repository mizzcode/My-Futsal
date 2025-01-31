<!-- filepath: /c:/laragon/www/My-Futsal/resources/views/home.blade.php -->
@extends('layouts.app')

@section('header')
    @include('components.navbar')
    <header class="bg-[#252525]">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-10">
            <div class="flex space-x-5 rounded-xl">
                <div x-data="{ selectedCity: 'Semua Kota' }"
                    class="relative flex items-center justify-between space-x-2 w-[18.75rem] bg-white rounded-xl px-4 cursor-pointer">
                    <span class="font-bold mx-auto" x-text="selectedCity"></span>
                    <img src="{{ asset('storage/menu.png') }}" alt="menu">
                    <select x-model="selectedCity" class="absolute inset-0 opacity-0 cursor-pointer">
                        <option value="Semua Kota">Semua Kota</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->city }}">{{ $city->city }}</option>
                        @endforeach
                    </select>
                </div>
                <div x-data="{ selectedSport: 'Semua Olahraga' }"
                    class="relative flex items-center justify-between space-x-2 w-[18.75rem] bg-white rounded-xl px-4 cursor-pointer">
                    <span class="font-bold mx-auto" x-text="selectedSport"></span>
                    <img src="{{ asset('storage/menu.png') }}" alt="menu">
                    <select x-model="selectedSport" class="absolute inset-0 opacity-0 cursor-pointer">
                        <option value="Semua Olahraga">Semua Olahraga</option>
                        @foreach ($sports as $sport)
                            <option value="{{ $sport->name }}">{{ $sport->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div x-data="{
                    date: '{{ date('Y-m-d') }}',
                    openDatePicker() {
                        this.$refs.dateInput.showPicker();
                    },
                    formatDate(date) {
                        if (!date) return 'Pilih Tanggal';
                        const [year, month, day] = date.split('-');
                        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        return `${day}-${months[parseInt(month) - 1]}-${year}`;
                    }
                }"
                    class="relative flex items-center justify-between space-x-2 w-[18.75rem] bg-white rounded-xl px-4 cursor-pointer"
                    @click="openDatePicker()">
                    <span class="font-bold mx-auto" x-text="formatDate(date)"></span>
                    <img src="{{ asset('storage/calendar.png') }}" alt="calendar">
                    <input type="date" x-ref="dateInput" x-model="date"
                        class="absolute inset-0 w-full h-full opacity-0 pointer-events-none">
                </div>

                <button
                    class="bg-my-red shadow-xl font-bold ms-2 w-[18.75rem] rounded-xl text-white py-2 px-5">Search</button>
            </div>
        </div>
    </header>
@endsection

@section('content')
    @include('components.hero')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="font-bold mt-12 mb-8 text-xl">REKOMENDASI <span class="text-[#E72929]">VENUE</span></h2>
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
                            <p class="font-semibold">Harga Mulai <span class="text-green-400">Rp
                                    {{ number_format($minPrice, 0, ',', '.') }}</span></p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @include('components.banner')
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection