<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */

class TaskFactory extends Factory
{
        
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        $user = User::all()->random();
        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
          'is_done' => fake()->boolean(),
          'title' => fake()->text(10),
          'due_date' => now(),
          'description' => fake()->text(40),
          'user_id' => $user,
          'category_id' => User::where('id', $user['id'])->first()->categories->random()['id']

        ];
    }
}
