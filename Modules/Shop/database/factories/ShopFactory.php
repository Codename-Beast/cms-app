<?php

namespace Modules\Shop\database\factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Shop\Models\Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => substr($this->faker->text(15), 0, -1),
            'company_name' => substr($this->faker->text(15), 0, -1),
            'slug' => substr($this->faker->uuid(15), 0 ,-1),
            'description' => $this->faker->paragraph,
            'status' => 1,
            'is_listed' => 1,
            'is_featured' => 0,
            'is_promoted' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
