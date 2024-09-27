<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        $keluhan = $faker->sentence(10);

        $kategori = $this->determineKategori($keluhan);

        return [
            'nama_pelapor' => $faker->name(),
            'email_pelapor' => $faker->unique()->safeEmail(),
            'sektor' => fake()->randomElement(['Operasional', 'IT', 'Keamanan', 'Produksi']),
            'kategori' => $kategori, 
            'keluhan' => $keluhan,
            'keterangan' => fake()->randomElement(['open', 'closed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    private function determineKategori($keluhan)
    {
        $keluhan = strtolower($keluhan);

        if (strpos($keluhan, 'mesin penggali rusak') !== false || 
            strpos($keluhan, 'jaringan listrik mati') !== false || 
            strpos($keluhan, 'sistem keselamatan mati') !== false) {
            return 'kritis';
        } elseif (strpos($keluhan, 'alat berat lambat') !== false || 
                  strpos($keluhan, 'sistem monitoring') !== false || 
                  strpos($keluhan, 'pompa air') !== false) {
            return 'tinggi';
        } elseif (strpos($keluhan, 'lampu indikator') !== false || 
                  strpos($keluhan, 'ac tidak berfungsi') !== false || 
                  strpos($keluhan, 'komputer lambat') !== false) {
            return 'sedang';
        } else {
            return 'rendah';
        }
    }
}
