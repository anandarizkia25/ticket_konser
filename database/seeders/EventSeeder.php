<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Konser Lavora',
                'category' => 'Musik',
                'ticket_price' => 50000,
                'image' => null,
                'description' => 'Konser ini dibawakan oleh Lavora di kota Tangerang Selatan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sekaten',
                'category' => 'Festival',
                'ticket_price' => 75000,
                'image' => null,
                'description' => 'Perasyaan tahunan untuk memperingati Maulid Nabi Muhammad SAW di kota Yogyakarta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Public Speaking',
                'category' => 'Seminar',
                'ticket_price' => 100000,
                'image' => null,
                'description' => 'Seminar tentang public speaking di kota Jakarta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Konser NDX',
                'category' => 'Musik',
                'ticket_price' => 60000,
                'image' => null,
                'description' => 'Konser ini dibawakan oleh NDX di kota Bandung.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ogoh-Ogoh',
                'category' => 'Festival',
                'ticket_price' => 80000,
                'image' => null,
                'description' => 'Penampilan ogoh-ogoh dalam rangka perayaan Nyepi di kota Bali.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Soft Skills',
                'category' => 'Seminar',
                'ticket_price' => 120000,
                'image' => null,
                'description' => 'Seminar tentang soft skills di kota Bogor.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
