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
        // User::factory(48)->create();
        // Ticket::factory(98)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
                'name' => 'Revan Angkasa',
                'username' => 'admin',
                'email' => 'revan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Abigail Rachel',
                'username' => 'guest',
                'email' => 'aralie@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
            [
                'name' => 'Dimas Saputra',
                'username' => 'dimas123',
                'email' => 'dimas.saputra@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Fira Amalia',
                'username' => 'fira_amalia',
                'email' => 'fira.amalia@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
            [
                'name' => 'Rian Kurniawan',
                'username' => 'rian123',
                'email' => 'rian.kurniawan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Melisa Andriani',
                'username' => 'melisa_a',
                'email' => 'melisa.andriani@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
            [
                'name' => 'Budi Prasetyo',
                'username' => 'budi123',
                'email' => 'budi.prasetyo@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Rini Widjaya',
                'username' => 'rini_w',
                'email' => 'rini.widjaya@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
            [
                'name' => 'Bayu Nugroho',
                'username' => 'bayu_nugroho',
                'email' => 'bayu.nugroho@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
            [
                'name' => 'Clara Angelina',
                'username' => 'clara_a',
                'email' => 'clara.angelina@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Agus Santoso',
                'username' => 'agus123',
                'email' => 'agus.santoso@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
            [
                'name' => 'Lia Maharani',
                'username' => 'lia_maharani',
                'email' => 'lia.maharani@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Dina Kartika',
                'username' => 'dina_kartika',
                'email' => 'dina.kartika@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
        ];

        foreach($user as $data => $val){
            User::create($val);
        }

        $ticket = [
            [
                'nama_pelapor' => 'Revan Angkasa',
                'email_pelapor' => 'revan@gmail.com',
                'sektor' => 'IT',
                'keluhan' => 'layanan server lambat',
                'keterangan' => 'closed',
            ],
            [
                'nama_pelapor' => 'Revan Angkasa',
                'email_pelapor' => 'revan@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'gangguan wi-fi',
                'keterangan' => 'open',
            ],
            
            // Abigail Rachel
            [
                'nama_pelapor' => 'Abigail Rachel',
                'email_pelapor' => 'aralie@gmail.com',
                'sektor' => 'Support',
                'keluhan' => 'komputer hang',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Abigail Rachel',
                'email_pelapor' => 'aralie@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'layanan email tidak bisa diakses',
                'keterangan' => 'closed',
            ],
        
            // Dimas Saputra
            [
                'nama_pelapor' => 'Dimas Saputra',
                'email_pelapor' => 'dimas.saputra@gmail.com',
                'sektor' => 'Keuangan',
                'keluhan' => 'printer rusak',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Dimas Saputra',
                'email_pelapor' => 'dimas.saputra@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'layanan VPN terputus',
                'keterangan' => 'closed',
            ],
        
            // Fira Amalia
            [
                'nama_pelapor' => 'Fira Amalia',
                'email_pelapor' => 'fira.amalia@gmail.com',
                'sektor' => 'Marketing',
                'keluhan' => 'laptop tidak bisa booting',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Fira Amalia',
                'email_pelapor' => 'fira.amalia@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'akses internet lambat',
                'keterangan' => 'closed',
            ],
        
            // Rian Kurniawan
            [
                'nama_pelapor' => 'Rian Kurniawan',
                'email_pelapor' => 'rian.kurniawan@gmail.com',
                'sektor' => 'IT',
                'keluhan' => 'keyboard tidak berfungsi',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Rian Kurniawan',
                'email_pelapor' => 'rian.kurniawan@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'layanan hosting down',
                'keterangan' => 'closed',
            ],
        
            // Melisa Andriani
            [
                'nama_pelapor' => 'Melisa Andriani',
                'email_pelapor' => 'melisa.andriani@gmail.com',
                'sektor' => 'Support',
                'keluhan' => 'aplikasi crash saat digunakan',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Melisa Andriani',
                'email_pelapor' => 'melisa.andriani@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'layanan email sering error',
                'keterangan' => 'closed',
            ],
        
            // Budi Prasetyo
            [
                'nama_pelapor' => 'Budi Prasetyo',
                'email_pelapor' => 'budi.prasetyo@gmail.com',
                'sektor' => 'Keuangan',
                'keluhan' => 'software akuntansi tidak bisa dibuka',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Budi Prasetyo',
                'email_pelapor' => 'budi.prasetyo@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'akses jaringan terputus',
                'keterangan' => 'closed',
            ],
        
            // Rini Widjaya
            [
                'nama_pelapor' => 'Rini Widjaya',
                'email_pelapor' => 'rini.widjaya@gmail.com',
                'sektor' => 'Admin',
                'keluhan' => 'layar monitor berkedip',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Rini Widjaya',
                'email_pelapor' => 'rini.widjaya@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'gangguan aplikasi email',
                'keterangan' => 'closed',
            ],
        
            // Bayu Nugroho
            [
                'nama_pelapor' => 'Bayu Nugroho',
                'email_pelapor' => 'bayu.nugroho@gmail.com',
                'sektor' => 'Logistik',
                'keluhan' => 'scanner tidak berfungsi',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Bayu Nugroho',
                'email_pelapor' => 'bayu.nugroho@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'akses file server lambat',
                'keterangan' => 'closed',
            ],
        
            // Clara Angelina
            [
                'nama_pelapor' => 'Clara Angelina',
                'email_pelapor' => 'clara.angelina@gmail.com',
                'sektor' => 'HRD',
                'keluhan' => 'error pada aplikasi kehadiran',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Clara Angelina',
                'email_pelapor' => 'clara.angelina@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'layanan hosting tidak stabil',
                'keterangan' => 'closed',
            ],
        
            // Agus Santoso
            [
                'nama_pelapor' => 'Agus Santoso',
                'email_pelapor' => 'agus.santoso@gmail.com',
                'sektor' => 'Admin',
                'keluhan' => 'file tidak bisa di-print',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Agus Santoso',
                'email_pelapor' => 'agus.santoso@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'gangguan koneksi internet',
                'keterangan' => 'closed',
            ],
        
            // Lia Maharani
            [
                'nama_pelapor' => 'Lia Maharani',
                'email_pelapor' => 'lia.maharani@gmail.com',
                'sektor' => 'Support',
                'keluhan' => 'aplikasi tidak bisa login',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Lia Maharani',
                'email_pelapor' => 'lia.maharani@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'layanan email down',
                'keterangan' => 'closed',
            ],
        
            // Dina Kartika
            [
                'nama_pelapor' => 'Dina Kartika',
                'email_pelapor' => 'dina.kartika@gmail.com',
                'sektor' => 'HRD',
                'keluhan' => 'komputer tidak bisa dihidupkan',
                'keterangan' => 'open',
            ],
            [
                'nama_pelapor' => 'Dina Kartika',
                'email_pelapor' => 'dina.kartika@gmail.com',
                'sektor' => 'RISA',
                'keluhan' => 'gangguan pada aplikasi payroll',
                'keterangan' => 'closed',
            ]
        ];

        foreach($ticket as $data => $val){
            Ticket::create($val);
        }
    }
}
