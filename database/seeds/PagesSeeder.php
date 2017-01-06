<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //3
        Page::create(
            [
                'name' => 'Page1',
                'text' => '<p>Test <b>page1</b></p>',
                'alias' => 'page1'
            ]
        );
        Page::create(
            [
                'name' => 'Page2',
                'text' => '<p>Test <b>page2</b></p>',
                'alias' => 'page2'
            ]
        );
        Page::create(
            [
                'name' => 'Page3',
                'text' => '<p>Test <b>page3</b></p>',
                'alias' => 'page3'
            ]
        );
    }
}
