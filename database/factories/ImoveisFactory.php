<?php

namespace Database\Factories;

use App\Models\Imoveis;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImoveisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imoveis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [  
            'id' => $this->faker->numberBetween(1,9999999),
            'user_id' => $this->faker->numberBetween(1,9999999),
            'cidade' => $this->faker->text(200),
            'operacao' => $this->faker->text(25),
            'descricao' => $this->faker->text(200),
            'bairro' => $this->faker->text(200),
            'created_at' => $this->faker->date(),
            'dormitorios' => $this->faker->numberBetween(100,200),
            'suites' => $this->faker->numberBetween(100,200),
            'vagas_garagem' => $this->faker->numberBetween(100,200),
            'area_util' => $this->faker->numberBetween(100,200),
            'valor' => $this->faker->numberBetween(10,500),
            'tipo_id' => $this->faker->numberBetween(1,5),
            'image' => 'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg'
        ];
    }
}
