<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['nama_kategori' => 'Protein', 'image_path' => 'img/k1.png'],
            ['nama_kategori' => 'Buah-Buahan', 'image_path' => 'img/k2.png'],
            ['nama_kategori' => 'Sayuran', 'image_path' => 'img/k3.png'],
            ['nama_kategori' => 'Frozen Food', 'image_path' => 'img/k4.png'],
            ['nama_kategori' => 'Bumbu Dapur', 'image_path' => 'img/k5.png'],
            ['nama_kategori' => 'Makanan Ringan', 'image_path' => 'img/k6.png'],
        ];

        foreach ($categories as $category) {
            $imageName = $category['image_path'];
            $hashedName = Hash::make($imageName);

            // Store the image in storage/app/public/kategori and get the path
            $path = Storage::putFile('public/kategori', public_path($imageName));

            // Remove 'public/' prefix from the stored path
            $pathWithoutPublic = str_replace('public/kategori/', '', $path);

            DB::table('kategoris')->insert([
                'nama_kategori' => $category['nama_kategori'],
                'foto' => $pathWithoutPublic,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
