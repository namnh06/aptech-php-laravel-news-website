<?php

use App\Category;
use App\Article;
use App\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
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
        $article = Article::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            $categoryIdRand = $categories[array_rand($categories)];
            $articleIdRand = $article[array_rand($article)];

            $checkExists = ArticleCategory::where('category_id', $categoryIdRand)->where('article_id', $articleIdRand)->exists();
            if (!$checkExists) {
                ArticleCategory::create([
                    'category_id' => $categoryIdRand,
                    'article_id' => $articleIdRand,
                ]);
            }
        }
    }
}