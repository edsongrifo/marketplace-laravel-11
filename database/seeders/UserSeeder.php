<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Edson Grifo',
                'username' => 'grifo',
                'email' => 'edson.empreendedor.digital@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('egtm11@re')
            ],
            [
                'name' => 'Vendedor Vendor',
                'username' => 'grifovendor',
                'email' => 'vendedor@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('egtm11@re')
            ],
            [
                'name' => 'Cliente User',
                'username' => 'grifocliente',
                'email' => 'cliente@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('egtm11@re')
            ]
        ]);
    }
}
