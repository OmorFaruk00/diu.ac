<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'              => 'Lemon Patwari',
                'email'             => 'lemonpatwari@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => Carbon::now()
            ]

        ];

        \DB::table('users')->insert($data);
    }
}
