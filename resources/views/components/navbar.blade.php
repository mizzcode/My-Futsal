<nav class="bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <img class="size-10" src="{{ asset('storage/image-removebg.png') }}" alt="My Futsal Logo">
                <span class="font-bold">My Futsal</span>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 font-bold space-x-6">
                    <a href="#"><span class="fw-bold">HOME</span></a>
                    <a href="#"><span class="fw-bold">VENUE</span></a>
                    <img class="w-10" src="{{ asset('storage/shopping-cart.png') }}" alt="cart">
                    <button class="shadow-grey ms-2 rounded-xl py-2 px-3">REGISTER</button>
                    <button class="bg-my-red shadow-xl ms-2 rounded-xl text-white py-2 px-5">LOGIN</button>
                </div>
            </div>
        </div>
    </div>
</nav>

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
