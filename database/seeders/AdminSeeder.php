<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'Admin',
            'name' => 'Adminstrator',
            'role_akun' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminaja'),
            'created_at' => Carbon::now(),
        ]);
    }
}
