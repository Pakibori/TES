<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
            'username' =>'np',
            'name'=>    'Nataniel Pakibori',
            'email'=> 'np@gmail.com',
            'level'=> 'admin',
            'password'=>bcrypt('admin')
            ],
            [
                'username' =>'gudang',
                'name'=>    'Kepala Gudang',
                'email'=> 'gudang@gmail.com',
                'level'=> 'gudang',
                'password'=>bcrypt('gudang')  
            ],
            [
            'username' =>'dinas',
            'name'=>    'kepala dinas',
            'email'=> 'dinas@gmail.com',
            'level'=> 'dinas',
            'password'=>bcrypt('dinas')
            ],
            [
                'username' =>'puskesmas',
                'name'=>    'Puskesmas',
                'email'=> 'puskesmas@gmail.com',
                'level'=> 'puskesmas',
                'password'=>bcrypt('puskesmas')  
            ]
         ];
         foreach ($user as $key => $value) {
            User::create($value);
         }
    }
}
