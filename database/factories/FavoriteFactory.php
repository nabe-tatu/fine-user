<?php

namespace Database\Factories;

use App\Models\Favorite;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FavoriteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Favorite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId = User::inRandomOrder()->first()->id;
        $tweetId = Tweet::inRandomOrder()->first()->id;

        return [
            'id' => Str::uuid(),
            'user_id' => $userId,
            'tweet_id' => $tweetId,
        ];
    }
}
