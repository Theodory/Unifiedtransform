<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "hasib",
            'email' => 'theodoryf@gmail.com.com',
            'password' => bcrypt(123456789),
            'role' => 'master',
            'active' => 1,
            'verified' => 1,
        ]);
        factory(App\User::class, 200)->create();
    }
}
