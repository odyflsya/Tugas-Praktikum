<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::class;
    public function definition(): array
    {
        return [
            'nama_dosen' => $this->faker->name(),
            'nip' => $this->faker->numerify('##########'),
            'matkul' => $this->faker->randomElement(['Matematika Dasar', 'Pemrograman Web Lanjutan', 'Pemrograman Berbasis Objek', 'Sistem Basis Data'])          
        ];
    }
}
