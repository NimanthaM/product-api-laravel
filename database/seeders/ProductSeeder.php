<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Using local images stored in public/images/products/
        // To add your own images:
        // 1. Place image files in: public/images/products/
        // 2. Update the image_url below to match your filename
        // 3. Run: php artisan migrate:fresh --seed
        
        $products = [
            [
                'name' => 'Wireless Bluetooth Headphones',
                'description' => 'Premium noise-cancelling wireless headphones with 30-hour battery life and crystal-clear sound quality.',
                'price' => 129.99,
                'image_url' => '/images/products/headphones.jpg',
            ],
            [
                'name' => 'Smart Watch Pro',
                'description' => 'Advanced fitness tracker with heart rate monitor, GPS, and water resistance. Perfect for active lifestyles.',
                'price' => 299.99,
                'image_url' => '/images/products/smartwatch.jpg',
            ],
            [
                'name' => 'Portable Power Bank',
                'description' => '20,000mAh high-capacity power bank with fast charging support for all your devices on the go.',
                'price' => 49.99,
                'image_url' => '/images/products/powerbank.jpg',
            ],
            [
                'name' => 'Mechanical Gaming Keyboard',
                'description' => 'RGB backlit mechanical keyboard with customizable keys and tactile switches for the ultimate gaming experience.',
                'price' => 159.99,
                'image_url' => '/images/products/keyboard.jpg',
            ],
            [
                'name' => '4K Webcam',
                'description' => 'Professional 4K webcam with auto-focus and built-in microphone, perfect for streaming and video calls.',
                'price' => 89.99,
                'image_url' => '/images/products/webcam.jpg',
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with precision tracking and long-lasting battery life for comfortable all-day use.',
                'price' => 39.99,
                'image_url' => '/images/products/mouse.jpg',
            ],
            [
                'name' => 'USB-C Hub Adapter',
                'description' => 'Multi-port USB-C hub with HDMI, USB 3.0, SD card reader, and power delivery for maximum connectivity.',
                'price' => 59.99,
                'image_url' => '/images/products/usb-hub.jpg',
            ],
            [
                'name' => 'Laptop Stand',
                'description' => 'Adjustable aluminum laptop stand with ergonomic design to improve posture and reduce neck strain.',
                'price' => 44.99,
                'image_url' => '/images/products/laptop-stand.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
