<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::create([
        'name'=>"Admin",
        'email'=>"admin@gmail.com",
        'role'=>"admin",
        'profile'=>"default.png",
        'password'=>Hash::make('admin@123'),
        ]);
    }
}
