@extends('layouts.app')

@section('header')
    @include('components.navbar')
    <header class="bg-[#252525]">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex space-x-5 rounded-xl">
                <div x-data="{ selectedCity: 'Semua Kota' }"
                    class="relative flex items-center justify-between space-x-2 w-[18.75rem] bg-white rounded-xl px-4 cursor-pointer">
                    <span class="font-bold mx-auto" x-text="selectedCity"></span>
                    <img src="{{ asset('storage/menu.png') }}" alt="menu">
                    <select x-model="selectedCity" class="absolute inset-0 opacity-0 cursor-pointer">
                        <option value="Semua Kota">Semua Kota</option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                    </select>
                </div>
                <div x-data="{ selectedCity: 'Semua Olahraga' }"
                    class="relative flex items-center justify-between space-x-2 w-[18.75rem] bg-white rounded-xl px-4 cursor-pointer">
                    <span class="font-bold mx-auto" x-text="selectedCity"></span>
                    <img src="{{ asset('storage/menu.png') }}" alt="menu">
                    <select x-model="selectedCity" class="absolute inset-0 opacity-0 cursor-pointer">
                        <option value="Semua Olahraga">Semua Olahraga</option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
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
        <h2 class="font-bold mt-12 mb-8 text-xl">REKOMENDASI <span class="text-[#E72929]">LAPANGAN</span></h2>
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
        @include('components.banner')
    </div>
    @endsection

    @section('footer')
        @include('components.footer')
    @endsection