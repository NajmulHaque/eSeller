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
            ['name' => 'Fresh Fruits', 'slug' => 'fresh-fruits', 'image' => 'images/product-pictures/Fruits/Apple.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fresh Vegetables', 'slug' => 'fresh-vegetables', 'image' => 'images/product-pictures/Vegetables/Gourd.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Spinach (shak)', 'slug' => 'spinach', 'image' => 'images/product-pictures/Spinach/Pui-Shak.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fresh Meat', 'slug' => 'fresh-meat', 'image' => 'images/product-pictures/Meat/Local-Chicken-Deshi-Murgi.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fresh Fish', 'slug' => 'fresh-fish', 'image' => 'images/product-pictures/Fish/Hilsha-Fish.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Others', 'slug' => 'others', 'image' => 'images/product-pictures/others.png', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
