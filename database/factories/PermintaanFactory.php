<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permintaan>
 */
class PermintaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pengajuan' => $this->faker->sentence,
            'nama_barang' => $this->faker->word,
            'nama_vendor' => $this->faker->company,
            'jumlah' => $this->faker->numberBetween(1, 100),
            'jenis' => 'Elektronik',
            'harga' => $this->faker->numberBetween(1000, 50000),
            'total_harga' => $this->faker->numberBetween(100,10000),
            'deskripsi' => $this->faker->paragraph,
        ];
    }
}
