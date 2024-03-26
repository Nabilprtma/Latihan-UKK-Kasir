<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin")
        ]);
        User::create([
            "name" => "nabil",
            "email" => "nabil@gmail.com",
            "password" => bcrypt("nabil")
        ]);

        $adminAccount = User::where("name", "=", "Admin")->first();
        $adminAccount->assignRole("administrator");

        $petugasAccount = User::where("name", "=", "nabil")->first();
        $petugasAccount->assignRole("petugas");
    }
}
