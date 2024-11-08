<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perbaikan>
 */
class PerbaikanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word,
            'nama_pengajuan' => $this->faker->sentence,
            'kode_barang_plat' => $this->faker->unique()->word,
            'harga' => $this->faker->numberBetween(1000, 50000),
            'tanggal' => $this->faker->date(),
            'keterangan_kerusakan' => $this->faker->paragraph,
        ];
    }
}
