<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@org.com',
                'password' => Hash::make('AdminOrganisasi12345678'), // Ganti dengan password aman di produksi
                'role' => 'admin'
            ]);
    }
}
