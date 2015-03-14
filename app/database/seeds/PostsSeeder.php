<?php

class PostsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
    $faker = Faker\Factory::create(); 
    Post::truncate();
    for($i=0; $i<20 ;$i++)  {
    Post::create([
      'title' => $faker ->sentence(2),
      'description' => $faker ->paragraph(20),
      'author' => $faker ->name,
      'preview'  => $faker->imageUrl(100, 300)
      
    
    ]);  }
	}

}
