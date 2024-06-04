<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = new User;
        $user->name = "Mangel";
        $user->email = "mangel@gmail.com";
        $user->password = bcrypt('mangel23');
        $user->save();
    }
}
