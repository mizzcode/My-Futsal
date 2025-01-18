<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\Schedule;
use App\Models\Sports;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'mizz',
            'password' => Hash::make('mizz'),
            'role' => 'member',
        ]);
        $user2 = User::create([
            'username' => 'mizz2',
            'password' => Hash::make('mizz'),
            'role' => 'member',
        ]);
        $user3 = User::create([
            'username' => 'mizz3',
            'password' => Hash::make('mizz'),
            'role' => 'member',
        ]);

        $futsal = Sports::create([
            'name' => 'Futsal',
        ]);

        $basket = Sports::create([
            'name' => 'Basket',
        ]);

        $badminton = Sports::create([
            'name' => 'Badminton',
        ]);

        $gorBulungan = Venue::create([
            'name' => 'Gor Bulungan',
            'image' => 'https://images-tm.tempo.co/all/2018/07/24/702902/702902_1200.jpg',
            'city' => 'Jakarta',
            'sport_id' => $futsal->id,
        ]);

        $gorBulungan2 = Venue::create([
            'name' => 'Gor Bulungan',
            'image' => 'https://images-tm.tempo.co/all/2018/07/24/702902/702902_1200.jpg',
            'city' => 'Bandung',
            'sport_id' => $basket->id,
        ]);

        $gorBulungan3 = Venue::create([
            'name' => 'Gor Bulungan',
            'image' => 'https://images-tm.tempo.co/all/2018/07/24/702902/702902_1200.jpg',
            'city' => 'Surabaya',
            'sport_id' => $badminton->id,
        ]);

        $field = Field::create([
            'name' => 'Lapangan A',
            'image' => 'https://images-tm.tempo.co/all/2018/07/24/702902/702902_1200.jpg',
            'venue_id' => $gorBulungan->id,
        ]);

        $field2 = Field::create([
            'name' => 'Lapangan A',
            'image' => 'https://images-tm.tempo.co/all/2018/07/24/702902/702902_1200.jpg',
            'venue_id' => $gorBulungan2->id,
        ]);

        $field3 = Field::create([
            'name' => 'Lapangan A',
            'image' => 'https://images-tm.tempo.co/all/2018/07/24/702902/702902_1200.jpg',
            'venue_id' => $gorBulungan3->id,
        ]);

        Schedule::create([
            'field_id' => $field->id,
            'date' => '2025-01-02 14:30:00',
            'status' => 'booked',
            'price' => 100_000,
            'user_id' => $user->id,
        ]);

        Schedule::create([
            'field_id' => $field2->id,
            'date' => '2025-01-02 17:30:00',
            'status' => 'booked',
            'price' => 150_000,
            'user_id' => $user2->id,
        ]);

        Schedule::create([
            'field_id' => $field3->id,
            'date' => '2025-01-02 21:30:00',
            'status' => 'booked',
            'price' => 200_000,
            'user_id' => $user3->id,
        ]);
    }
}
