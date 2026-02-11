<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::get('products.json');
        $products = json_decode($json, true);

        foreach ($products as $product) {
            DB::table('chemicals')->insert($product);
        }
    }
}
