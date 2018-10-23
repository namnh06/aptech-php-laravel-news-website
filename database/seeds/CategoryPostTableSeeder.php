<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryIds = Category::pluck('id')->all();

        $postIds = Post::pluck('id')->all();

        foreach (range(1, 30) as $index) {
            $categoryIdRand = $categoryIds[array_rand($categoryIds)];
            $postIdRand = $postIds[array_rand($postIds)];

            $checkExists = DB::table('category_post')->where('category_id', $categoryIdRand)->where('post_id', $postIdRand)->exists();

            if (!$checkExists) {
                DB::table('category_post')->insert([
                    'category_id' => $categoryIdRand,
                    'post_id' => $postIdRand,
                ]);
            }
        }
    }
}
