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
        $posts = Post::get(['id']);

        $categories = Category::get(['id']);

        DB::table('category_post')->insert([
            'category_id' => $categories[2]->id,
            'post_id' => $posts[5]->id,
        ]);
    }
}
