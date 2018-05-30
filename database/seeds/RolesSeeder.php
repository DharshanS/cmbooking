<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=\App\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions'=> json_encode([
                'admin'=> true,
                'user'=> true
            ]),
        ]);

        $user=\App\Role::create([
            'name' => 'User',
            'slug' => 'user',
            'permissions'=> json_encode([
                'user'=> true
            ]),
        ]);
        //
    }
}
