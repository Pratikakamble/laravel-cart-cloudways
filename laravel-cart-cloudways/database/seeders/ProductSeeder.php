<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$products = [
       		[
       			'name' => 'Samsung Galaxy M33 5G',
       			'details' => 'Emerald Brown, 8GB, 128GB Storage) | 5nm Processor | 6000mAh Battery | Voice Focus | Upto 16GB RAM with RAM Plus | Travel Adapter to be Purchased Separately',
       			'description' => 'Exynos 1280 Octa Core 2.4GHz 5nm Processor with the 12 band support for a True 5G experience 16.72 centimeters (6.6-inch) LCD Display, FHD+ resolution,  Storage & SIM: 8GB RAM | 128GB internal memory expandable up to 1TB| SIM 1 + SIM 2+ Micro SD Latest Android v12.0, One UI 4 operating system.',
       			'brand' => 'Samsung',
       			'price' => '19499',
       			'shopping_cost' => '25',
       			'image_path' => 'storage/samsung.jpg'
       		],
       		[
       			'name' => 'Apple iPhone 11',
       			'details' => '6.1-inch (15.5 cm diagonal) Liquid Retina HD LCD display Water and dust resistant (2 meters for up to 30 minutes, IP68)',
       			'description' => 'As part of our efforts to reach our environmental goals, iPhone no longer includes a power adapter or EarPods. Dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Portrait mode, and 4K video up to 60fps',
       			'brand' => 'Apple',
       			'price' => '46999',
       			'shopping_cost' => '30',
       			'image_path' => 'storage/apple.jpg'
       		]
       	];

       	foreach($products as $key=>$value){
       		Product::create($value);
       	}
    }
}
