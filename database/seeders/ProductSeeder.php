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
        $products = [
            [
                'name' => 'Wireless Bluetooth Headphones',
                'description' => 'Premium noise-cancelling wireless headphones with 30-hour battery life and crystal-clear sound quality.',
                'price' => 129.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&h=500&fit=crop',
            ],
            [
                'name' => 'Smart Watch Pro',
                'description' => 'Advanced fitness tracker with heart rate monitor, GPS, and water resistance. Perfect for active lifestyles.',
                'price' => 299.99,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&h=500&fit=crop',
            ],
            [
                'name' => 'Portable Power Bank',
                'description' => '20,000mAh high-capacity power bank with fast charging support for all your devices on the go.',
                'price' => 49.99,
                'image_url' => 'https://images.unsplash.com/photo-1609091839311-d5365f9ff1c5?w=500&h=500&fit=crop',
            ],
            [
                'name' => 'Mechanical Gaming Keyboard',
                'description' => 'RGB backlit mechanical keyboard with customizable keys and tactile switches for the ultimate gaming experience.',
                'price' => 159.99,
                'image_url' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&h=500&fit=crop',
            ],
            [
                'name' => '4K Webcam',
                'description' => 'Professional 4K webcam with auto-focus and built-in microphone, perfect for streaming and video calls.',
                'price' => 89.99,
                'image_url' => 'https://images.unsplash.com/photo-1585464231875-d9ef1f5ad396?w=500&h=500&fit=crop',
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with precision tracking and long-lasting battery life for comfortable all-day use.',
                'price' => 39.99,
                'image_url' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?w=500&h=500&fit=crop',
            ],
            [
                'name' => 'USB-C Hub Adapter',
                'description' => 'Multi-port USB-C hub with HDMI, USB 3.0, SD card reader, and power delivery for maximum connectivity.',
                'price' => 59.99,
                'image_url' => 'https://images.unsplash.com/photo-1625948515291-69613efd103f?w=500&h=500&fit=crop',
            ],
            [
                'name' => 'Laptop Stand',
                'description' => 'Adjustable aluminum laptop stand with ergonomic design to improve posture and reduce neck strain.',
                'price' => 44.99,
                'image_url' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=500&h=500&fit=crop',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
