<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = json_decode(Storage::get('categories.json'), true);

        foreach ($categories as $name) {

            $slug = Str::slug($name);

            $exists = DB::table('chemical_categories')
                        ->where('slug', $slug)
                        ->exists();

            if (!$exists) {
                DB::table('chemical_categories')->insert([
                    'name' => $name,
                    'slug' => $slug,
                    'status' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}