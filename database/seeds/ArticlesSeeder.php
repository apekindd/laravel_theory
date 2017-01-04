<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //1
        DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUES (?,?,?)',
                                [
                                    'Blog post 1',
                                    '<p>Test <b>text1</b></p>',
                                    'pic1.jpg'
                                ]);
        //2
        DB::table('articles')->insert(
            [
                [
                    'name' => 'Blog post 2',
                    'text' => '<p>Test <b>text2</b></p>',
                    'img' => 'pic2.jpg'
                ],
                [
                    'name' => 'Blog post 3',
                    'text' => '<p>Test <b>text3</b></p>',
                    'img' => 'pic3.jpg'
                ]
            ]
        );
        //3
        Article::create(
            [
                'name' => 'Blog post 4',
                'text' => '<p>Test <b>text4</b></p>',
                'img' => 'pic4.jpg'
            ]
        );
    }
}
