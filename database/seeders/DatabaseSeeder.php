<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Product::create(['name' => '2021 Apple MacBook Pro (14-inch, Apple M1 Pro chip)', 'desc' => '14.2-inch (diagonal) mini-LED backlit Liquid Retina XDR display, 3024 by 1964 pixels with ProMotion technology for adaptive refresh rates up to 120Hz, and up to 1000 nits sustained (full-screen) brightness, 1600 nits peak brightness, True Tone technology, ProMotion technology for adaptive refresh rates up to 120Hz. System on Chip (SoC) Apple M1 Pro chip Up to 10-core CPU with 8 performance cores and 2 efficiency cores Up to 16-core GPU 16-core Neural Engine 200GB/s memory bandwidth. 14-inch MacBook Pro, USB-C to MagSafe 3 Cable (2 m), 67W USB-C Power Adapter (included with M1 Pro with 8-core CPU) 96W USB-C Power Adapter (included with M1 Pro with 10-core CPU)', 'price' => 120.00, 'about' => 'Apple M1 Pro or M1 Max chip for a massive leap in CPU, GPU, and machine learning performance
        Up to 10-core CPU delivers up to 3.7x faster performance to fly through pro workflows quicker than ever
        Up to 32-core GPU with up to 13x faster performance for graphics-intensive apps and games
        16-core Neural Engine for up to 11x faster machine learning performance
        Longer battery life, up to 17 hours
        Up to 64GB of unified memory so everything you do is fast and fluid
        Up to 8TB of superfast SSD storage launches apps and opens files in an instant
        Stunning 14-inch Liquid Retina XDR display with extreme dynamic range and contrast ratio
        1080p FaceTime HD camera with advanced image signal processor for sharper video calls
        Six-speaker sound system with force-cancelling woofers', 'manufacturer' => "Apple", 'image_url' => 'https://m.media-amazon.com/images/I/61cCf94xIEL._AC_SX679_.jpg']);
    }
}
