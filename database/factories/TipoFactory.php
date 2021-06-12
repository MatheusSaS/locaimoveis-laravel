<?php

namespace Database\Factories;

use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imovel_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'name' => $imovel_name 
        ];
    }
}
