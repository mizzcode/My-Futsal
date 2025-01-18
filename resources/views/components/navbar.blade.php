<nav class="bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <img class="size-10" src="{{ asset('storage/image-removebg.png') }}" alt="My Futsal Logo">
                <span class="font-bold">My Futsal</span>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 font-bold space-x-6">
                    <a href="{{ route('home') }}"><span class="fw-bold">HOME</span></a>
                    <a href="{{ route('venue') }}"><span class="fw-bold">VENUE</span></a>
                    <img class="w-10" src="{{ asset('storage/shopping-cart.png') }}" alt="cart">
                    <button class="shadow-grey ms-2 rounded-xl py-2 px-3"><a href="{{ route('register') }}">REGISTER</a></button>
                    <button class="bg-my-red shadow-xl ms-2 rounded-xl text-white py-2 px-5"><a href="{{ route('login') }}">LOGIN</a></button>
                </div>
            </div>
        </div>
    </div>
</nav>
