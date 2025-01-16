@extends('layouts.app')

@section('title', 'Login')

@section('header')
    @include('components.navbar')
@endsection

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="flex mt-16">
            <img src="{{ asset('storage/login.png') }}" alt="Login" class="w-[542px] h-[756px]">
            <div class="flex justify-center gap-y-5 flex-col md:ms-8 2xl:ms-14">
                <h1 class="text-my-red font-bold text-5xl">Kick into Action!</h1>
                <p>Ribuan orang telah merasakan pengalaman seru berolahraga bersama kami. Sekarang Giliran kamu! </p>
                <span class="text-my-red font-bold text-2xl">- MY FUTSAL</span>
                <form action="" method="POST" class="flex flex-col gap-y-5">
                    @csrf
                    <div class="flex flex-col gap-y-2">
                        <input placeholder="Username" type="text" name="username" id="username" class="border font-semibold border-black rounded-md p-3" required>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input placeholder="Password" type="password" name="password" id="password" class="border font-semibold border-black rounded-md p-3" required>
                    </div>
                    <button type="submit" class="bg-my-red text-white font-bold py-3 rounded-md">LOGIN</button>
                    <p>Kamu belum punya akun ? <a href="/auth/register" class="text-my-red underline font-semibold">Register disini</a></p>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
