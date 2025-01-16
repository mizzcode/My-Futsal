@extends('layouts.app')

@section('title', 'Verify Register')

@section('header')
    @include('components.navbar')
@endsection

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="flex mt-16">
            <img src="{{ asset('storage/verify-register.png') }}" alt="Register" class="w-[582px] h-[986px]">
            <div class="flex justify-center gap-y-5 flex-col md:ms-8 2xl:ms-14">
                <h1 class="text-my-red font-bold text-5xl">Check Your Inbox!</h1>
                <p>Silakan cek email Anda untuk kode verifikasi yang telah kami kirim. Terima kasih!<br> <span
                        class="text-my-red font-bold text-2xl flex"><img src="{{ asset('storage/line-1.png') }}" alt="Line 1" class="h-1 self-center me-2">MY FUTSAL</span>
                </p>
                <p class="text-sm">Email anda sudah terdaftar ? <a href="{{ route('register') }}"
                        class="text-my-red underline">Klik disini untuk melakukan registrasi kembali</a><br><img src="{{ asset('storage/line-2.png') }}" alt="Line 2" class="my-3"></p>
                <form action="{{ route('verify-code') }}" method="POST" class="flex flex-col gap-y-5">
                    @csrf
                    <div class="flex flex-col gap-y-2">
                        <label class="text-sm text-[#686D76]">Kode Verifikasi Email :</label>
                        <input placeholder="Verification Code" type="text" name="verification_code"
                            id="verification_code" class="border font-semibold border-black rounded-md p-3" required>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label class="text-sm text-[#686D76]">Lengkapi Akun :</label>
                        <input placeholder="Full Name" type="text" name="full_name" id="full_name"
                            class="border font-semibold border-black rounded-md p-3" required>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input placeholder="Username" type="text" name="username" id="username"
                            class="border font-semibold border-black rounded-md p-3" required>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input placeholder="Password" type="password" name="password" id="password"
                            class="border font-semibold border-black rounded-md p-3" required>
                    </div>
                    <!-- Input dengan format bendera dan kode negara -->
                    <div class="flex flex-col gap-y-2">
                        <div class="flex items-center border border-black rounded-md overflow-hidden">
                            <!-- Bagian kode negara -->
                            <div class="flex items-center bg-gray-300 px-3">
                                <img src="{{ asset('storage/indonesia-1.png') }}" alt="Indonesia Flag" class="w-5 h-5 mr-2">
                                <span class="text-gray-700 text-sm py-3 font-bold">+62</span>
                            </div>
                            <!-- Input nomor telepon -->
                            <input
                                placeholder="0812-3456-7890"
                                type="number"
                                name="phone_number"
                                id="phone_number"
                                class="flex-1 p-3 text-sm font-semibold"
                                required
                            />
                        </div>
                    </div>
                    <button type="submit" class="bg-my-red text-white font-bold py-3 rounded-md">REGISTER</button>
                </form>
                <p class="text-sm">Tidak Menerima Kode Verifikasi ? <a href="#" class="text-my-red underline font-semibold">Klik disini untuk bantuan</a>
                </p>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('components.footer')
@endsection