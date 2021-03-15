<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    //values for created_at, updated_at will be added automatically
    {
        return [
            "code" => Str::random(3),
            "name" => $this->faker->name,
            "credit" => 3,
            "courseCategory" => $this->faker->name,
        ];
    }
}
