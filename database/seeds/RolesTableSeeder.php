<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Role::create([
            'name' => 'Admin'
        ]);

        Role::create([
            'name' => 'Manufacturer'
        ]);

        Role::create([
            'name' => 'Manufacturers'
        ]);

        Role::create([
            'name' => 'Buyer'
        ]);
    }
}
