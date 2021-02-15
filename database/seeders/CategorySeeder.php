<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{

    public function run()
    {
      for ($i = 0; $i < 10; $i++){
        DB::table('categories')->insert([
            'title' => 'Category '.$i,
            'slug' => 'category-'.$i
        ]);
      }
    }
}
