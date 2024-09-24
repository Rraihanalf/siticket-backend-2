<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ticket;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
                'name' => 'Revan Angkasa',
                'username' => 'revan',
                'email' => 'revan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],

            [
                'name' => 'Abigail Rachel',
                'username' => 'ralie',
                'email' => 'aralie@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
        ];

        foreach($user as $data => $val){
            User::create($val);
        }

        $ticket = [
            [
                'nama_pelapor' => 'Delynn',
                'email_pelapor' => 'lyn@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'gangguan Wi-Fi',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Lily',
                'email_pelapor' => 'Hillary@gmail.com',
                'sektor' => 'BUMA',
                'keluhan' => 'Engsel Laptop Patah',
                'keterangan' => 'open',
            ],
        ];

        foreach($ticket as $data => $val){
            Ticket::create($val);
        }
    }
}
