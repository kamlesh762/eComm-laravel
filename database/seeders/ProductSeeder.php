<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
            ],
            [
                'name'=>'LG mobile',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
            ],
            [
                'name'=>'LG tv',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'tv',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
            ],
            [
                'name'=>'LG frizz',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'tv',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
            ],
            [
                'name'=>'LG mobile',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'frizz',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'
            ]
        ]);
    }
}
