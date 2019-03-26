<?php

use App\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Post::create([
                'title' => $faker->sentence($nbWords = rand(5, 9), $variableNbWords = true),
                'title_slug' => $faker->slug,
                'description' => $faker->paragraph($nbSentences = rand(1, 3), $variableNbSentences = true),
                'description' => $faker->text,
                'content' => $faker->randomHtml(2, 5),
                'image_path' => $faker->image($dir = null, $width = 640, $height = 480, 'cats', false),
                'image_url' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
            ]);
        }
    }
}