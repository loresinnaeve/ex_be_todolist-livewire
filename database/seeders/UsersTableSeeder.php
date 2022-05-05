<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
            'role_id'=>1,  //admin
            'name'=>'Lore',
            'email'=>'lore@todo.com',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            //'photo_id'=>1,
            'password'=> bcrypt(12345678),
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'role_id'=>2,  //admin
            'name'=>'Subscriber One',
            'email'=>'one@todo.com',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            //'photo_id'=>1,
            'password'=> bcrypt(12345678),
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'role_id'=>2,  //admin
            'name'=>'Subscriber Two',
            'email'=>'two@todo.com',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            //'photo_id'=>1,
            'password'=> bcrypt(12345678),
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'role_id'=>2,  //admin
            'name'=>'Subscriber Three',
            'email'=>'Three@todo.com',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            //'photo_id'=>1,
            'password'=> bcrypt(12345678),
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
