<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        	'name' => "Admin",
        	'email' => "admin@gmail.com",
        	'password' =>Hash::make("123456"),
            'address' => "DKI Jakarta, Indonesia",
            'hp' => "082281827201",
            'id_kota' => 1,
        	'level' => 1,
        ]);
    }
}
