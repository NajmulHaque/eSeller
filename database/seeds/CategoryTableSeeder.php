<?php

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder; 

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Fresh Fruits', 'slug' => 'fresh-fruits', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fresh Vegetables', 'slug' => 'fresh-vegetables', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Spinach (shak)', 'slug' => 'spinach', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fresh Meat', 'slug' => 'fresh-meat', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fresh Fish', 'slug' => 'fresh-fish', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Others', 'slug' => 'others', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
