<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Product::create([
                'category_id' => 5,
                'vendor_id' => '1',
                'created_at' => now(),
                'name' => 'Hilsha Fish ',
                'slug' => 'hilsa',
                'details' => '1 kg',
                'price' => '1000',
                'description' =>'Ilish or Hilsha is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Hilsha-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => '2',
                'created_at' => now(),
                'name' => 'Prawn Big ',
                'slug' => 'prawn-big',
                'details' => '1 kg',
                'price' => '550',
                'description' =>'Prawn is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Prawn-Big.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => '3',
                'created_at' => now(),
                'name' => 'Deshi Pangas',
                'slug' => 'pangas',
                'details' => '1 kg',
                'price' => '130',
                'description' =>'Pangas is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Deshi-Pangas.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => '4',
                'created_at' => now(),
                'name' => 'Kachki',
                'slug' => 'kachki',
                'details' => '500 gm',
                'price' => '400',
                'description' =>'kachki is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/kachki.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Koi',
                'slug' => 'koi',
                'details' => '1 kg',
                'price' => '160',
                'description' =>'Koi or Hilsha is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Koi-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Magur',
                'slug' => 'magur',
                'details' => '1 kg',
                'price' => '250',
                'description' =>'Magur is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Magur-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Prawn Small',
                'slug' => 'prawn-small',
                'details' => '1 kg',
                'price' => '450',
                'description' =>'Prawn small is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Prawn-Small.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Punti',
                'slug' => 'punti',
                'details' => '500 gm',
                'price' => '350',
                'description' =>'Punti is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Punti-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Rui',
                'slug' => 'roi',
                'details' => '1 kg',
                'price' => '480',
                'description' =>'Rui or Hilsha is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Rui-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Shing',
                'slug' => 'shing',
                'details' => '1 kg',
                'price' => '150',
                'description' =>'Shing is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Shing-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Tengra',
                'slug' => 'tengra',
                'details' => '1 kg',
                'price' => '350',
                'description' =>'Tengra small is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Tengra-Fish.jpg',
            ])->categories();
            Product::create([
                'category_id' => 5,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Tilapia',
                'slug' => 'tilapia',
                'details' => '1 kg',
                'price' => '220',
                'description' =>'Tilapia is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fish/Tilapia-Fish.jpg',
            ])->categories();
            // fish category product end here

            Product::create([
                'category_id' => 1,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Apple',
                'slug' => 'apple',
                'details' => '1 kg',
                'price' => '180',
                'description' =>'Fruit is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Apple.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Banana',
                'slug' => 'banana',
                'details' => '1 dozen',
                'price' => '120',
                'description' =>'banana is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Banana.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Boroi',
                'slug' => 'boroi',
                'details' => '1 kg',
                'price' => '90',
                'description' =>'Boroi is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Boroi.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Cocunut',
                'slug' => 'coconut',
                'details' => '1 piece',
                'price' => '80',
                'description' =>'Cocunut is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Cocunut.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Dates',
                'slug' => 'dates',
                'details' => '1 kg',
                'price' => '750',
                'description' =>'dates is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Dates.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Grapes',
                'slug' => 'grapes',
                'details' => '1 kg',
                'price' => '250',
                'description' =>'Grapes is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Grapes.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Grapes Red',
                'slug' => 'grapes-red',
                'details' => '1 kg',
                'price' => '550',
                'description' =>'Grapes red is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Grapes-Red.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Green Apple',
                'slug' => 'green-apple',
                'details' => '1 kg',
                'price' => '200',
                'description' =>'Green Apple is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Green-Apple.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Green Cocunut',
                'slug' => 'green-cocunut',
                'details' => '1 piece',
                'price' => '60',
                'description' =>'Green Cocunut is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Green-Cocunut.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Guava',
                'slug' => 'guava',
                'details' => '1 kg',
                'price' => '150',
                'description' =>'Guava is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Guava.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Hog Plum',
                'slug' => 'hog-plum',
                'details' => '1 kg',
                'price' => '350',
                'description' =>'Hog Plum small is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fruit and rich in essential omega 3 fatty acids. n Bangladesh this fruit is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Hog-plum.jpg',
            ])->categories();
            Product::create([
                'category_id' => 1,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Malta',
                'slug' => 'malta',
                'details' => '1 kg',
                'price' => '220',
                'description' =>'Malta is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Malta.jpg',
            ])->categories();
            Product::create([
                'category_id' => 2,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Ash Gourd',
                'slug' => 'Ash-Gourd',
                'details' => '1 kg',
                'price' => '220',
                'description' =>'Gourd is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Vegetables/Ash-Gourd.jpg',
            ])->categories();
            Product::create([
                'category_id' => 2,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Bitter Gourd',
                'slug' => 'Bitter-Gourd',
                'details' => '1 kg',
                'price' => '230',
                'description' =>'Bitter is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Vegetables/Bitter Gourd.jpg',
            ])->categories();
            Product::create([
                'category_id' => 2,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Cabbage',
                'slug' => 'abbage',
                'details' => '1 kg',
                'price' => '320',
                'description' =>'Cabbage is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Vegetables/Cabbage.jpg',
            ])->categories();
            Product::create([
                'category_id' => 2,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Carrot',
                'slug' => 'Carrot',
                'details' => '1 kg',
                'price' => '100',
                'description' =>'Carrot is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Vegetables/Carrot.jpg',
            ])->categories();
            Product::create([
                'category_id' => 2,
                'vendor_id' => 4,
                'created_at' => now(),
                'name' => 'Coriander',
                'slug' => 'coriander',
                'details' => '1 kg',
                'price' => '20',
                'description' =>'Coriander is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Fruits/Coriander.jpg',
            ])->categories();
            Product::create([
                'category_id' => 3,
                'vendor_id' => 1,
                'created_at' => now(),
                'name' => 'Data Shak',
                'slug' => 'Data-Shak',
                'details' => '1 kg',
                'price' => '50',
                'description' =>'Data-Shak is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Spinach/Data-Shak.jpg',
            ])->categories();
            Product::create([
                'category_id' => 3,
                'vendor_id' => 2,
                'created_at' => now(),
                'name' => 'Kochi-Data-Shak',
                'slug' => 'Kochi-Data-Shak',
                'details' => '1 kg',
                'price' => '90',
                'description' =>'Kochi-Data-Shak is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Spinach/Kochi-Data-Shak.jpg',
            ])->categories();
            Product::create([
                'category_id' => 4,
                'vendor_id' => 3,
                'created_at' => now(),
                'name' => 'Beef',
                'slug' => 'Beef',
                'details' => '1 kg',
                'price' => '500',
                'description' =>'Beef is a national fruit of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fruit in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.',
                'image' => 'images/product-pictures/Meat/Beef.jpg',
            ])->categories();

            // Select random entries to be featured
            Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 70])->update(['featured' => true]);
    }
}
