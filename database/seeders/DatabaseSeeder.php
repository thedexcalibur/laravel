<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nama' => 'Bambang',
            'username' => 'bambang1',
            'email' => 'bambang@gmail.com',
            'npm' => '',
            'kelas' => '',
            'level' => 1,
            'password' => bcrypt('12345')
        ]);
        User::create([
            'nama' => 'Ucup',
            'username' => 'ucup1',
            'email' => 'ucup1@gmail.com',
            'npm' => '14118212',
            'kelas' => '4KA33',
            'level' => 0,
            'password' => bcrypt('persona')
        ]);
    }
}
