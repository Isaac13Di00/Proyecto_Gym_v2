<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otro']),
            'fecha_nac' => $this->faker->date(),
            'tipo_sangre' => $this->faker->randomElement(['A+','A-','B+','B-','AB+','AB-','O+','O-']),
            'telefono' => '1234567890',
            'calle' => $this->faker->word(),
            'colonia' => $this->faker->word(),
            'cp' => '12345',
            'isAdmin' => false,
            'imagen' => '/images/user-alt.png',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
