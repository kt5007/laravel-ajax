<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'name' => 'name' . $i,
                'email' => 'email' . $i,
                'password' => 'test123' . $i,
            ];
            DB::table('users')->insert([$data]);
        }
    }
}
