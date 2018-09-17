<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
        		'name' => 'Super heroes',
        		'slug' => 'Super heroes',
        		'description'	=> 'lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis!',
        		'color' =>	'#440022'
        	],
        	[
        		'name' => 'Geek',
        		'slug' => 'geek',
        		'description'	=> 'lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis!',
        		'color' =>	'#445500'
        	]
        );

        Category::insert($data);
    }
}
