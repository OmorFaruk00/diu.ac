<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
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
        $user = User::create([
            'name' => 'Lemon Patwari',
            'email' => 'lemonpatwari@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()
        ]);

        Team::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'personal_team' => $user->id,
        ]);
    }
}
