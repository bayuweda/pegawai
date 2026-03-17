<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'jabatan' => fake()->randomElement([
                'Manager',
                'Staff',
                'HR',
                'IT Support',
                'Marketing'
            ]),
            'tanggal_lahir' => fake()->date(),
            'tanggal_masuk' => fake()->date(),
            'foto' => null
        ];
    }
}
