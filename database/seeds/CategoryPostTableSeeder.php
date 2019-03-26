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
        //
        $categories = Category::pluck('id')->toArray();
        $posts = Post::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            $categoryIdRand = $categories[array_rand($categories)];
            $postIdRand = $posts[array_rand($posts)];

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