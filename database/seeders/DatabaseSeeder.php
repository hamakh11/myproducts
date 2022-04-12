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

        Product::create(['name' => 'SteelSeries Arctis 3 Console - Stereo Wired Gaming Headset', 'desc' => 'Designed for everywhere you game, with superior sound, comfort and style on all console gaming platforms, including PS5, PS4, Xbox Series X|S, Xbox One, Nintendo Switch, and mobile', 'price' => 120.00]);
        Product::create(['name' => 'Corsair VOID RGB Elite Wireless Premium Gaming Headset', 'desc' => 'Hear everything from the lightest footstep to the most Thundering explosion thanks to premium custom-tuned 50mm high-density neodymium Audio drivers with an expanded frequency range of 20Hz-30,000Hz', 'price' => 59.00]);
    }
}
