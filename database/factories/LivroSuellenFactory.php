<?php

namespace Database\Factories;

use App\Models\LivroSuellen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LivroSuellenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivroSuellen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => 'Livro Suellen ' . Str::random(5),
            'autor' => 'Autor ' . Str::random(5),
            'isbn' => (string) rand(1000000000, 9999999999),
        ];
    }
}
