<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     //   $this->call(UserSeeder::class);
        $user=new User;
        $user->name='Admain';
        $user->email='Admin@gmail.com';
        $user->role='admain';
        $user->password=Hash::make('admain12345678');
        $user->save();
         return $user;
 }
}