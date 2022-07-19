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
            'alamat' => 'Jln. Kemerdekaan Jakarta',
            'nohp' => '082232322312',
            'email' => 'bambang@gmail.com',
            'level' => 1,
            'password' => bcrypt('12345')
        ]);
        User::create([
            'nama' => 'Bambang',
            'alamat' => 'Jln. Kemerdekaan Jakarta Raya',
            'nohp' => '0822323229',
            'email' => 'pengunjung@gmail.com',
            'level' => 0,
            'password' => bcrypt('persona')
        ]);
    }
}
