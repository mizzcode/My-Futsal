@extends('layouts.app')

@section('title')
    Booking Lapangan {{ $field->name }} - {{ $field->venue->name }}
@endsection

@section('header')
    @include('components.navbar')
    <img src="{{ asset('storage/stick.png') }}" alt="stick" class="w-full">
@endsection

@section('content')
    <div class="mx-auto max-w-6xl" x-data="{ active: 'Schedule' }">
        <div class="relative">
            <img src="{{ asset('storage/' . $field->venue->large_image) }}" class="mt-6"
                alt="{{ $field->venue->large_image }}">
            <img src="{{ asset('storage/' . $field->venue->logo_image) }}" class="absolute bottom-3 left-10 m-4 w-24"
                alt="{{ $field->venue->logo_image }}">
        </div>
        <h1 class="font-bold text-2xl mt-5 mb-1">{{ $field->name }}</h1>
        <a href="{{ route('venue.detail', ['slug' => $field->venue->slug]) }}"
            class="underline text-my-red font-bold">{{ $field->venue->name }}</a>

        {{-- Komponen share --}}
        @include('components.share')

        <ul class="flex items-center my-16 gap-x-20 font-bold border-t border-b w-full">
            <li :class="{ 'bg-my-red text-white p-3 rounded-lg': active === 'Schedule' }" @click="active = 'Schedule'"
                class="cursor-pointer">Schedule</li>
            <li :class="{ 'bg-my-red text-white p-3 rounded-lg': active === 'Rules' }" @click="active = 'Rules'"
                class="cursor-pointer">Rules</li>
        </ul>

        <div x-show="active === 'Schedule'">

            <div class="grid grid-cols-1 gap-20 sm:grid-cols-2 sm:gap-32 2xl:gap-52">
                <div>
                    <h1 class="mb-5 font-bold text-lg">Pilih Tanggal Booking :</h1>
                    <div x-data="{
                        date: '{{ date('Y-m-d') }}',
                        openDatePicker() {
                            this.$refs.dateInput.showPicker();
                        },
                        formatDate(date) {
                            if (!date) return 'Pilih Tanggal';
                            const [year, month, day] = date.split('-');
                            return `${day}-${month}-${year}`;
                        }
                    }"
                        class="relative flex items-center justify-between space-x-2 bg-white rounded-xl px-4 cursor-pointer shadow-lg outline"
                        @click="openDatePicker()">
                        <span class="font-bold mx-auto" x-text="formatDate(date)"></span>
                        <img src="{{ asset('storage/calendar.png') }}" alt="calendar">
                        <input type="date" x-ref="dateInput" x-model="date"
                            class="absolute inset-0 w-full h-full opacity-0 pointer-events-none">
                    </div>
                    <div class="mt-8 text-sm">
                        <p>*Periode <span class="text-my-red">Tanggal Booking</span> :</p>
                        <p>*Tap pada kolom waktu untuk memilih <span class="text-my-red">Jam Booking</span></p>
                    </div>
                </div>
                <div>
                    <h1 class="mb-5 font-bold text-lg">Pilih Lapangan :</h1>
                    <div x-data="{ selectedField: '{{ $field->name }}' }"
                        class="relative flex items-center justify-between py-1.5 space-x-2 bg-white rounded-xl px-4 cursor-pointer shadow-lg outline">
                        <span class="font-bold mx-auto" x-text="selectedField"></span>
                        <img src="{{ asset('storage/chevron-down.png') }}" alt="chevron">
                        <select x-model="selectedField" class="absolute inset-0 opacity-0 cursor-pointer">
                            @foreach ($fields as $field)
                                <option value="{{ $field->name }}">{{ $field->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div x-show="active === 'Rules'">
            <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-y-5 2xl:grid-cols-4 gap-10 2xl:gap-7">
                <div class="bg-my-grey rounded-xl py-6 px-10">
                    <p class="text-my-red font-bold text-lg mb-3">Aturan Venue :</p>
                    <p>- Pemesanan lapangan valid apabila sudah ada konfirmasi dari online booking system, dan harus
                        ditunjukkan kepada staf Inspire Arena.</p>
                    <p>- Pengguna lapangan yang walk-in tetap melakukan pemesanan dan pembayaran via sistem sebelum memasuki
                        lapangan.</p>
                    <p>- TIDAK ADA perpanjangan waktu untuk keterlambatan pengguna lapangan di jam reservasi.</p>
                    <p>- TIDAK ADA kebijakan Refund dari pihak pengelola; Reschedule bisa dilakukan by request melalui
                        sistem selambatnya H-5.</p>
                    <p>- Peminjaman bola bisa dilakukan dengan menitipkan KTP atau SIM ke staf Inspire Arena.</p>
                    <p>- Kunci kendaraan Anda di parkiran, dan tunjukkan karcis parkir ketika meninggalkan Inspire Arena.
                    </p>
                    <p>- Barang bawaan menjadi tanggung jawab masing-masing; segala bentuk kerusakan dan kehilangan di luar
                        tanggung jawab Inspire Arena.</p>
                    <p>- Jagalah kebersihan di seluruh area Inspire Arena dan buanglah sampah ke tempat sampah yang telah
                        disediakan.</p>
                    <p>- DILARANG merokok di semua area lapangan, foodcourt dll; merokok hanya diperbolehkan di area yang
                        disediakan di taman belakang.</p>
                    <p>- DILARANG membawa air mineral kemasan sekali pakai, kami menyediakan air minum isi ulang secara
                        gratis untuk semua pengunjung.</p>
                    <p>- DILARANG makan dan minum di dalam lapangan.</p>
                    <p>- DILARANG membawa senjata tajam, minuman keras / alkohol maupun obat-obatan terlarang.</p>
                </div>
                <div class="bg-my-grey rounded-xl py-6 px-10">
                    <p class="text-my-red font-bold mb-3 text-lg">Jam Operasional :</p>
                    <ul class="space-y-2">
                        <li class="flex justify-between">
                            <span class="font-bold">Hari</span>
                            <span class="font-bold me-9">Jam</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Senin</span>
                            <span>06.00 - 00.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Selasa</span>
                            <span>06.00 - 00.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Rabu</span>
                            <span>06.00 - 00.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Kamis</span>
                            <span>06.00 - 00.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Jumat</span>
                            <span>06.00 - 00.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu</span>
                            <span>06.00 - 00.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Minggu</span>
                            <span>06.00 - 00.00</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-my-grey rounded-xl py-6 px-10">
                    <p class="text-my-red font-bold text-lg mb-4 text-center">Protokol Kesehatan</p>
                    <div class="flex mb-5">
                        <div class="flex flex-col flex-1">
                            <p class="text-my-red font-semibold">Batasan Jumlah Pemain :</p>
                            <p>Jumlah pemain yang memasuki area lapangan dibatasi, dianjurkan tidak membawa keluarga atau
                                teman.</p>
                        </div>
                        <div class="flex flex-col flex-1">
                            <p class="text-my-red font-semibold">Suhu Tubuh :</p>
                            <p>Wajib dalam keadaan sehat, suhu badan diatas 37.3℃  tidak di izinkan untuk memasuki area
                                lapangan.
                            <p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col flex-1">
                            <p class="text-my-red font-semibold">Masker dan Cuci Tangan :</p>
                            <p>Wajib menggunakan <span class="hidden sm:inline"><br></span>
                                masker, dan mencuci <span class="hidden sm:inline"><br></span> tangan sebelum dan <span
                                    class="hidden sm:inline"><br></span> sesudah bermain.</p>
                        </div>
                        <div class="flex flex-col flex-1">
                            <p class="text-my-red font-semibold">Suhu Tubuh :</p>
                            <p>Wajib dalam keadaan sehat, suhu badan diatas 37.3℃  tidak di izinkan untuk memasuki area
                                lapangan.
                            <p>
                        </div>
                    </div>
                </div>
                <div class="bg-my-grey rounded-xl py-6 px-10">
                    <p class="text-my-red font-bold text-lg">Informasi</p>
                    <div class="flex items-center mt-5 gap-5">
                        <img src="{{ asset('storage/instagram.png') }}" class="ms-1" alt="">
                        <p>Instagram</p>
                    </div>
                    <div class="flex items-center mt-5 gap-4">
                        <img src="{{ asset('storage/location.png') }}" alt="">
                        <p>Asatu Area, Jl. RP. Soeroso No.1, Cikini, Menteng, Central Jakarta City, Jakarta 10330</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        @include('components.footer')
    @endsection
