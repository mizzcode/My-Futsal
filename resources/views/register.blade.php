@extends('layouts.app')

@section('title', 'Register')

@section('header')
    @include('components.navbar')
@endsection

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="flex mt-16">
            <img src="{{ asset('storage/register.png') }}" alt="Register" class="w-[437px] h-[664px] mx-32">
            <div class="flex justify-center gap-y-5 flex-col md:ms-8 2xl:ms-14">
                <h1 class="text-my-red font-bold text-5xl">Unleash the Thrill of Sports!</h1>
                <p>Sambut setiap hari dengan kekuatan untuk bergerak, keberanian untuk mendorong batas, dan tekad untuk menjadi lebih baik. Setiap latihan adalah langkah menuju kamu yang lebih sehat dan bahagia.</p>
                <span class="text-my-red font-bold text-2xl">MY FUTSAL</span>
                <form action="{{ route('postRegister') }}" method="POST" class="flex flex-col gap-y-5">
                    @csrf
                    <div class="flex flex-col gap-y-2">
                        <input placeholder="Email Address" type="email" name="email" id="email" class="border font-semibold border-black rounded-md p-3" required>
                        @if ($errors->has('email'))
                            <span class="text-red-500">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="bg-my-red text-white font-bold py-3 rounded-md">REGISTER</button>
                    <p>Sudah punya akun ? <a href="/auth/login" class="text-my-red underline font-semibold">Login disini</a></p>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
