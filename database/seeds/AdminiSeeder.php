<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
                                    ['name'=>'souheil',
                                    'email'=>'admin@gmail.com',
                                    'role'=>'admin',
                                    'password'=>Hash::make('123456789'),
                                    'image'=>'3.png'
                                   ]);

    }
}
