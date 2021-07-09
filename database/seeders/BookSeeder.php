<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  DB::table('authors')->insert([
            'first_name' => 'jack',
            'last_name' => 'sparrow',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
        ]);
        DB::table('authors')->insert([
            'first_name' => 'ed',
            'last_name' => 'kemper',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
        ]);

        DB::table('books')->insert([
            'title' => 'the art of war',
            'pages_count' => 220,
            'description' => 'the chinese author books',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
             'author_id' => 1,
           //  'publisher_id'=>1,
        ]);
        DB::table('books')->insert([
            'title' => 'enemy and friend',
            'pages_count' => 22,
            'description' => 'book of enemey',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
             'author_id' => 1,
          //   'publisher_id'=>1,
        ]);
        DB::table('books')->insert([
            'title' => 'firend and forever',
            'pages_count' => 20,
            'description' => 'book of friend',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
             'author_id' => 2,
         //    'publisher_id'=>2,
        ]);
        DB::table('books')->insert([
            'title' => 'queen magic',
            'pages_count' => 2234,
            'description' => 'queen of magic of the world',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
             'author_id' => 2,
        //     'publisher_id'=>2,
        ]);
      */
      DB::table('publishers')->insert([
        'name' => 'Penguin Random House',
          'created_at' => date('Y-m-d H:i:s'),
           'updated_at' => date('Y-m-d H:i:s'),
           
    ]);
      DB::table('publishers')->insert([
      'name' => 'Hachette Livre.',
      'created_at' => date('Y-m-d H:i:s'),
       'updated_at' => date('Y-m-d H:i:s'),
       
   ]);
      DB::table('publishers')->insert([
    'name' => 'HarperCollins',
    'created_at' => date('Y-m-d H:i:s'),
     'updated_at' => date('Y-m-d H:i:s'),
     
 ]);
     DB::table('publishers')->insert([
  'name' => 'Simon & Schuste',
  'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),
   
]);
  
DB::table('tags')->insert([
  'name' => 'Kids Book',
  'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),
   
]);
DB::table('tags')->insert([
  'name' => 'around the book',
  'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),
   
]);
DB::table('tags')->insert([
  'name' => 'Addams Family Book',
  'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),
   
]);
DB::table('tags')->insert([
  'name' => 'Cartoon Book ',
  'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),
   
]);
DB::table('tags')->insert([
  'name' => 'Halloween Book ',
  'created_at' => date('Y-m-d H:i:s'),
   'updated_at' => date('Y-m-d H:i:s'),
   
]);
       
    }
}