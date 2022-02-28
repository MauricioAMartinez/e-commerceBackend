<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Mauricio Martinez';
        $user->user_name = 'gandalf';
        $user->email = 'example@gmail.com';
        $user->password = 123;
        $user->save();
    }
}
