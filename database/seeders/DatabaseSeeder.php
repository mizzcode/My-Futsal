<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Sports;
use App\Models\Venue;
use App\Models\Field;
use App\Models\Schedule;
use App\Models\VenueSports;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users
        User::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'email' => 'admin@example.com',
            'full_name' => 'Admin User',
            'phone_number' => '081234567890',
            'email_verified_at' => now(),
        ]);

        // Seed sports
        $futsal = Sports::create([
            'name' => 'Futsal',
        ]);

        $miniSoccer = Sports::create([
            'name' => 'Mini Soccer',
        ]);

        $badminton = Sports::create([
            'name' => 'Badminton',
        ]);

        // Seed venues
        $inspireArenaSulut = Venue::create([
            'name' => 'INSPIRE ARENA SULUT',
            'slug' => Str::slug('INSPIRE ARENA SULUT'),
            'image' => '1.png',
            'large_image' => 'inspire-arena-sulut.png',
            'logo_image' => 'logo-inspire-arena-sulut.png',
            'city' => 'Manado',
        ]);

        $koramilArena04 = Venue::create([
            'name' => 'KORAMIL ARENA 04',
            'slug' => Str::slug('KORAMIL ARENA 04'),
            'image' => '2.png',
            'large_image' => 'inspire-arena-sulut.png',
            'logo_image' => 'logo-inspire-arena-sulut.png',
            'city' => 'Jakarta Timur',
        ]);

        $ckmSupportCenter = Venue::create([
            'name' => 'CKM SUPPORT CENTER',
            'slug' => Str::slug('CKM SUPPORT CENTER'),
            'image' => '3.png',
            'large_image' => 'inspire-arena-sulut.png',
            'logo_image' => 'logo-inspire-arena-sulut.png',
            'city' => 'Karawang',
        ]);

        $jiepSportCenter = Venue::create([
            'name' => 'JIEP SPORT CENTER BASKET, FUTSAL & TENNIS',
            'slug' => Str::slug('JIEP SPORT CENTER BASKET, FUTSAL & TENNIS'),
            'image' => '4.png',
            'large_image' => 'inspire-arena-sulut.png',
            'logo_image' => 'logo-inspire-arena-sulut.png',
            'city' => 'Jakarta Timur',
        ]);

        $soccerSereniaMansion = Venue::create([
            'name' => 'SOCCER SERENIA MANSION',
            'slug' => Str::slug('SOCCER SERENIA MANSION'),
            'image' => '5.png',
            'large_image' => 'inspire-arena-sulut.png',
            'logo_image' => 'logo-inspire-arena-sulut.png',
            'city' => 'Jakarta Selatan',
        ]);

        $jsFutsal = Venue::create([
            'name' => 'JS FUTSAL',
            'slug' => Str::slug('JS FUTSAL'),
            'image' => '6.png',
            'large_image' => 'inspire-arena-sulut.png',
            'logo_image' => 'logo-inspire-arena-sulut.png',
            'city' => 'Depok',
        ]);

        // Seed venue_sports
        VenueSports::create([
            'venue_id' => $inspireArenaSulut->id,
            'sport_id' => $futsal->id,
        ]);

        VenueSports::create([
            'venue_id' => $inspireArenaSulut->id,
            'sport_id' => $miniSoccer->id,
        ]);

        VenueSports::create([
            'venue_id' => $koramilArena04->id,
            'sport_id' => $miniSoccer->id,
        ]);

        VenueSports::create([
            'venue_id' => $ckmSupportCenter->id,
            'sport_id' => $badminton->id,
        ]);

        VenueSports::create([
            'venue_id' => $jiepSportCenter->id,
            'sport_id' => $futsal->id,
        ]);

        VenueSports::create([
            'venue_id' => $soccerSereniaMansion->id,
            'sport_id' => $miniSoccer->id,
        ]);

        VenueSports::create([
            'venue_id' => $jsFutsal->id,
            'sport_id' => $futsal->id,
        ]);

        // Seed fields
        $field1 = Field::create([
            'name' => 'Futsal Outdoor A',
            'image' => 'field.png',
            'venue_id' => $inspireArenaSulut->id,
        ]);

        $field2 = Field::create([
            'name' => 'Futsal Outdoor B',
            'image' => 'field.png',
            'venue_id' => $inspireArenaSulut->id,
        ]);

        $field3 = Field::create([
            'name' => 'Indoor Court',
            'image' => 'field.png',
            'venue_id' => $inspireArenaSulut->id,
        ]);

        $field4 = Field::create([
            'name' => 'Mini Soccer',
            'image' => 'field.png',
            'venue_id' => $inspireArenaSulut->id,
        ]);

        $field5 = Field::create([
            'name' => 'Futsal Indoor A',
            'image' => 'field.png',
            'venue_id' => $koramilArena04->id,
        ]);

        $field6 = Field::create([
            'name' => 'Futsal Indoor B',
            'image' => 'field.png',
            'venue_id' => $koramilArena04->id,
        ]);

        $field7 = Field::create([
            'name' => 'Basketball Court',
            'image' => 'field.png',
            'venue_id' => $koramilArena04->id,
        ]);

        $field8 = Field::create([
            'name' => 'Badminton Court',
            'image' => 'field.png',
            'venue_id' => $koramilArena04->id,
        ]);

        // Seed fields for CKM Support Center
        $field9 = Field::create([
            'name' => 'Tennis Court A',
            'image' => 'field.png',
            'venue_id' => $ckmSupportCenter->id,
        ]);

        $field10 = Field::create([
            'name' => 'Tennis Court B',
            'image' => 'field.png',
            'venue_id' => $ckmSupportCenter->id,
        ]);

        $field11 = Field::create([
            'name' => 'Badminton Court A',
            'image' => 'field.png',
            'venue_id' => $ckmSupportCenter->id,
        ]);

        $field12 = Field::create([
            'name' => 'Badminton Court B',
            'image' => 'field.png',
            'venue_id' => $ckmSupportCenter->id,
        ]);

        // Seed fields for JIEP Sport Center
        $field13 = Field::create([
            'name' => 'Futsal Court A',
            'image' => 'field.png',
            'venue_id' => $jiepSportCenter->id,
        ]);

        $field14 = Field::create([
            'name' => 'Futsal Court B',
            'image' => 'field.png',
            'venue_id' => $jiepSportCenter->id,
        ]);

        $field15 = Field::create([
            'name' => 'Basketball Court A',
            'image' => 'field.png',
            'venue_id' => $jiepSportCenter->id,
        ]);

        $field16 = Field::create([
            'name' => 'Basketball Court B',
            'image' => 'field.png',
            'venue_id' => $jiepSportCenter->id,
        ]);

        // Seed fields for Soccer Serenia Mansion
        $field17 = Field::create([
            'name' => 'Soccer Field A',
            'image' => 'field.png',
            'venue_id' => $soccerSereniaMansion->id,
        ]);

        $field18 = Field::create([
            'name' => 'Soccer Field B',
            'image' => 'field.png',
            'venue_id' => $soccerSereniaMansion->id,
        ]);

        $field19 = Field::create([
            'name' => 'Mini Soccer Field A',
            'image' => 'field.png',
            'venue_id' => $soccerSereniaMansion->id,
        ]);

        $field20 = Field::create([
            'name' => 'Mini Soccer Field B',
            'image' => 'field.png',
            'venue_id' => $soccerSereniaMansion->id,
        ]);

        // Seed fields for JS Futsal
        $field21 = Field::create([
            'name' => 'Futsal Court A',
            'image' => 'field.png',
            'venue_id' => $jsFutsal->id,
        ]);

        $field22 = Field::create([
            'name' => 'Futsal Court B',
            'image' => 'field.png',
            'venue_id' => $jsFutsal->id,
        ]);

        $field23 = Field::create([
            'name' => 'Futsal Court C',
            'image' => 'field.png',
            'venue_id' => $jsFutsal->id,
        ]);

        $field24 = Field::create([
            'name' => 'Futsal Court D',
            'image' => 'field.png',
            'venue_id' => $jsFutsal->id,
        ]);

        $fields = [
            $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8, $field9, $field10,
            $field11, $field12, $field13, $field14, $field15, $field16, $field17, $field18, $field19, $field20,
            $field21, $field22, $field23, $field24
        ];

        $venuePrices = [
            $inspireArenaSulut->id => 125000,
            $koramilArena04->id => 300000,
            $ckmSupportCenter->id => 50000,
            $jiepSportCenter->id => 110000,
            $soccerSereniaMansion->id => 530000,
            $jsFutsal->id => 110000,
        ];

        foreach ($fields as $field) {
            $minPrice = $venuePrices[$field->venue_id];
            for ($i = 1; $i <= 10; $i++) {
                $status = $i % 2 == 0 ? 'booked' : 'available';
                $price = $i == 1 ? $minPrice : rand($minPrice + 100000, $minPrice + 500000);
                Schedule::create([
                    'date' => '2025-01-30',
                    'status' => $status,
                    'price' => $price,
                    'field_id' => $field->id,
                    'user_id' => $status === 'booked' ? 1 : null,
                ]);
            }
        }
    }
}