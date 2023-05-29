<?php

namespace Database\Factories;
use App\Models\Baq;
use App\Models\Vila;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VilaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Vila::class;

    public function definition(): array
    {

        $persianfaker= \Faker\Factory::create('fa_IR');
        return [
            'id' => $this->faker->numberBetween(1,100),
            'name' => $persianfaker->name(),
            'aks' => $persianfaker->realText(),
            'description' => $persianfaker->realText(),
            'url'=> 'https://loremflickr.com/750/550?random=' . rand(1,99)
            //
        ];
    }
}
