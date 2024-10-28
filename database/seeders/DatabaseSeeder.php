<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Peminjam;
use App\Models\Ticket;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

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

        $data = [
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG001',
                'name_model' => 'MEKATRONIK ( SIMULATOR )',
                'type_model' => 'MEKATRONIK ( SIMULATOR )',
                'manufacture' => 'CORPU',
                'group' => 'Simulator',
                'sub_group' => 'Autolube',
                'condition' => 'Not Good',
                'serial_number' => null,
                'deskripsi' => 'beberapa yang tidak fungsi'
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG002',
                'name_model' => 'REFRACTOMETER 1',
                'type_model' => 'EXTECH REFRACTOMETER',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG003',
                'name_model' => 'REFRACTOMETER 2',
                'type_model' => 'EXTECH REFRACTOMETER',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG004',
                'name_model' => 'BOR GAUGE 50-100MM',
                'type_model' => 'BOR GAUGE 50-100MM',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG005',
                'name_model' => 'BOR GAUGE 50-150MM',
                'type_model' => 'BOR GAUGE 50-150MM',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG006',
                'name_model' => 'OUTSIDE MICROMETER 100-125MM',
                'type_model' => 'MITUTOYO OUTSIDE MICROMETER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG007',
                'name_model' => 'OUTSIDE MICROMETER 75-100MM',
                'type_model' => 'MITUTOYO OUTSIDE MICROMETER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG008',
                'name_model' => 'OUTSIDE MICROMETER 50-75MM',
                'type_model' => 'MITUTOYO OUTSIDE MICROMETER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG009',
                'name_model' => 'VERNIER CALIPER 0-150MM (0251)',
                'type_model' => 'MITUTOYO VERNIER CALIPER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG010',
                'name_model' => 'DIAL GAUGE ATTACH (DIGITAL)',
                'type_model' => 'VOGEL DIAL GAUGE ATTACH',
                'manufacture' => 'GERMAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG011',
                'name_model' => 'THERMOMETER GUN (THERMAL CAMERA)',
                'type_model' => 'SWEDIA THERMOMETER GUN',
                'manufacture' => 'SWEDIA',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG012',
                'name_model' => 'DIGITAL MULTITESTER 1',
                'type_model' => 'SANWA DIGITAL MULTITESTER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG013',
                'name_model' => 'DIGITAL MULTITESTER 2',
                'type_model' => 'SANWA DIGITAL MULTITESTER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG014',
                'name_model' => 'DIGITAL MULTITESTER 3',
                'type_model' => 'SANWA DIGITAL MULTITESTER',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG015',
                'name_model' => 'TORQUE WRENCH BRITOOL',
                'type_model' => 'TORQUE WRENCH',
                'manufacture' => 'ENGLAND',
                'group' => 'Tool',
                'sub_group' => 'Common Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG016',
                'name_model' => 'KOMATSU RADIATOR CAP TESTER',
                'type_model' => 'RADIATOR CAP TESTER',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG017',
                'name_model' => 'RIDGID FILTER WRENCH',
                'type_model' => 'FILTER WRENCH',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG018',
                'name_model' => 'IMADA PUSH PULL SCALE',
                'type_model' => 'PUSH PULL SCALE',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG019',
                'name_model' => 'PRICISETOOL CRIMPING TOOL',
                'type_model' => 'CRIMPING TOOL',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG020',
                'name_model' => 'KOMATSU SPRING PUSHER',
                'type_model' => 'SPRING PUSHER',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG021',
                'name_model' => 'CEJN NIPLE 1',
                'type_model' => 'NIPPLE, (QUICK COUPLER)',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG022',
                'name_model' => 'CEJN NIPLE 2',
                'type_model' => 'NIPPLE, (QUICK COUPLER)',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG023',
                'name_model' => 'DELTA BATTERY CHARGE',
                'type_model' => 'BATTERY CHARGE',
                'manufacture' => 'DELTA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG024',
                'name_model' => 'KRISBOW HAND PALLET TROLEY',
                'type_model' => 'HAND PALLET TROLLEY',
                'manufacture' => 'KRISBOW',
                'group' => 'Tool',
                'sub_group' => 'Lifting',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG025',
                'name_model' => 'KOMATSU COMPRESSION GAUGE SET',
                'type_model' => 'COMPRESSION GAUGE SET',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Broken',
                'serial_number' => null,
                'deskripsi' => 'Rusak'
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG026',
                'name_model' => 'TACTIX ELECTRIC TOOL SET',
                'type_model' => 'ELCTRIC TOOL SET',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG027',
                'name_model' => 'ROBINAIR AC SERVICE TOOL',
                'type_model' => 'AIR CONDITIONER SERVICE TOOL',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG028',
                'name_model' => 'VALUE AC SERVICE TOOL VACUMP PUMP',
                'type_model' => 'AIR CONDITIONER SERVICE TOOL ( VACUMP PUMP )',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG029',
                'name_model' => 'SCANIA USB KEY',
                'type_model' => 'USB KEY',
                'manufacture' => 'SWEDIA',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG030',
                'name_model' => 'SCANIA VCI',
                'type_model' => 'VCI (VEHICLE COMMUNICATION INTERFACE)',
                'manufacture' => 'SWEDIA',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG031',
                'name_model' => 'CUMMINS BLOW-BY TOOL',
                'type_model' => 'BLOW-BY TOOL ( ADAPTER )',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG032',
                'name_model' => 'KOMATSU WIRING HARDNESS',
                'type_model' => 'WIRING HARDNESS ( VHMS SOCKET REAL DISPLAY )',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG033',
                'name_model' => 'GPS RECEIVER',
                'type_model' => 'GPS RECEIVER',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Spesial Tool',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG034',
                'name_model' => 'KOMATSU ENGINE RELATED GROUP',
                'type_model' => 'ENGINE RELATED GROUP',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG035',
                'name_model' => 'BATTERY LOAD TESTER',
                'type_model' => 'SCHUMACHER BATTERY LOAD TESTER',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG036',
                'name_model' => 'MULTITESTER ANALOG',
                'type_model' => 'SANWA MULTITESTER ANALOG',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG037',
                'name_model' => 'DIGITAL MULTITESTER',
                'type_model' => 'SANWA MULTITESTER DIGITAL',
                'manufacture' => 'JAPAN',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG038',
                'name_model' => 'Handy Smoke Checker',
                'type_model' => 'KOMATSU HANDY SMOKE CHECKER',
                'manufacture' => 'KOMATSU',
                'group' => 'Tool',
                'sub_group' => 'Diagnostic',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG039',
                'name_model' => 'FLOW METER',
                'type_model' => 'FLO-TECH FLOWMETER',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG040',
                'name_model' => 'PRESSURE GAUGE KIT ( DIGITAL )',
                'type_model' => 'STAUFF PRESSURE GAUGE KIT',
                'manufacture' => 'AMERIKA',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG041',
                'name_model' => 'KURSI Kelas 70 pcs',
                'type_model' => 'KURSI Kelas 70 pcs',
                'manufacture' => 'INDONESIA',
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG042',
                'name_model' => 'Meja Kelas 70 pcs',
                'type_model' => 'Meja Kelas 70 pcs',
                'manufacture' => 'INDONESIA',
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG043',
                'name_model' => 'TV Sharp 1',
                'type_model' => 'SHARP LED TV 60 Inch',
                'manufacture' => 'UT SCHOOL',
                'group' => 'Multimedia',
                'sub_group' => 'Multimedia',
                'condition' => 'Good',
                'serial_number' => '212721039',
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG044',
                'name_model' => 'TV Sharp 2',
                'type_model' => 'SHARP LED TV 60 Inch',
                'manufacture' => 'UT SCHOOL',
                'group' => 'Multimedia',
                'sub_group' => 'Multimedia',
                'condition' => 'Good',
                'serial_number' => '212720986',
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG045',
                'name_model' => 'Multitester Digital',
                'type_model' => 'TEKIRO MS-DM1907',
                'manufacture' => 'UT SCHOOL',
                'group' => 'Tool',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG046',
                'name_model' => 'Multitester Analog',
                'type_model' => 'WIPRO YX-360TRD',
                'manufacture' => 'UT SCHOOL',
                'group' => 'Multimedia',
                'sub_group' => 'Measurement',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG047',
                'name_model' => 'Projector 1',
                'type_model' => 'EPSON EB-945H',
                'manufacture' => 'JAPAN',
                'group' => 'GA',
                'sub_group' => 'Multimedia',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG048',
                'name_model' => 'Projector 2',
                'type_model' => 'SONY XGA',
                'manufacture' => 'JAPAN',
                'group' => 'GA',
                'sub_group' => 'Multimedia',
                'condition' => 'Not Good',
                'serial_number' => null,
                'deskripsi' => 'Terkadang Warna mulai pudar saat nyala lama'
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG049',
                'name_model' => 'Projector 3',
                'type_model' => 'SONY XGA',
                'manufacture' => 'JAPAN',
                'group' => 'GA',
                'sub_group' => 'Multimedia',
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG050',
                'name_model' => 'Projector 4',
                'type_model' => 'SONY XGA',
                'manufacture' => 'JAPAN',
                'group' => 'GA',
                'sub_group' => 'Multimedia',
                'condition' => 'Not Good',
                'serial_number' => null,
                'deskripsi' => 'Terkadang Warna mulai pudar saat nyala lama'
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG051',
                'name_model' => 'Roll Screen Projector 2x2m -1',
                'type_model' => 'Screen projector LeTaec',
                'manufacture' => null,
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG052',
                'name_model' => 'Roll Screen Projector 2x2m -2',
                'type_model' => 'Screen projector LeTaec',
                'manufacture' => null,
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG053',
                'name_model' => 'Roll Screen Projector 2.5x2.5m',
                'type_model' => 'Roll Screen Projector',
                'manufacture' => null,
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG054',
                'name_model' => 'Roll Screen Projector 1.6x1.2m/1',
                'type_model' => 'Screen projector Inforce',
                'manufacture' => null,
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Not Good',
                'serial_number' => null,
                'deskripsi' => 'Tiang rusak'
            ],
            [
                'corpu_area' => 'Tanjung',
                'kode_barang' => 'TJG055',
                'name_model' => 'Roll Screen Projector 1.6x1.2m/2',
                'type_model' => 'Screen projector Inforce',
                'manufacture' => null,
                'group' => 'GA',
                'sub_group' => null,
                'condition' => 'Good',
                'serial_number' => null,
                'deskripsi' => null
            ],
            
        ];
        
        

        foreach($data as $data => $val){
            Barang::create($val);
        }

        // $pinjam = [
        //     [
        //         'nama_peminjam' => 'Andi Setiawan',
        //         'email_peminjam' => 'andi.setiawan@example.com',
        //         'kode_barang' => 'BRG001', // Kamera Digital Canon EOS
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Budi Santoso',
        //         'email_peminjam' => 'budi.santoso@example.com',
        //         'kode_barang' => 'BRG002', // Laptop ASUS ROG Strix
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Cynthia Lestari',
        //         'email_peminjam' => 'cynthia.lestari@example.com',
        //         'kode_barang' => 'BRG003', // Smartphone Samsung Galaxy S21
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Dewi Anggraini',
        //         'email_peminjam' => 'dewi.anggraini@example.com',
        //         'kode_barang' => 'BRG004', // Headphone Sony WH-1000XM4
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Eka Putri',
        //         'email_peminjam' => 'eka.putri@example.com',
        //         'kode_barang' => 'BRG005', // Tablet Apple iPad Pro
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Fahmi Rizal',
        //         'email_peminjam' => 'fahmi.rizal@example.com',
        //         'kode_barang' => 'BRG006', // Monitor LG UltraWide
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Gina Melati',
        //         'email_peminjam' => 'gina.melati@example.com',
        //         'kode_barang' => 'BRG007', // Printer Epson EcoTank
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Hendra Sulaiman',
        //         'email_peminjam' => 'hendra.sulaiman@example.com',
        //         'kode_barang' => 'BRG008', // Kamera Action GoPro Hero
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Indah Permatasari',
        //         'email_peminjam' => 'indah.permatasari@example.com',
        //         'kode_barang' => 'BRG009', // Speaker JBL Charge 5
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'nama_peminjam' => 'Joko Nugroho',
        //         'email_peminjam' => 'joko.nugroho@example.com',
        //         'kode_barang' => 'BRG010', // Drone DJI Mavic Air 2
        //         'tanggal_pinjam' => now()->format('Y-m-d'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ];

        // foreach($pinjam as $data => $val){
        //     Peminjam::create($val);
        // }

    }
}
