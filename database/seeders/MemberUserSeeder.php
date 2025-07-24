<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class MemberUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::create([
                'name' => 'Member User',
                'email' => 'member@org.com',
                'password' => Hash::make('MemberLogin'), // password: 'password'
                'role' => 'member'
            ]);
    }
}
