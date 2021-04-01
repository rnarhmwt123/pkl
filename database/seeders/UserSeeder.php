<?php

namespace Database\Seeders;
use App\Models\User;
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
        //
        $user = new User();
        $user->name = "ernadmin";
        $user->email = "ernarahmawati@gmail.com";
        $user->password = bcrypt('ernarahma');
        $user->save();
    }
}
