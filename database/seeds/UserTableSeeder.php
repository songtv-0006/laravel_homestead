<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('users')->insert([
                'name' => 'User'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'password' => bcrypt('123qwe!@#'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }
}
