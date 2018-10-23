<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 10)->create();
        factory(App\Category::class, 3)->create();
        $this->call(CategoryPostTableSeeder::class);
    }
}
