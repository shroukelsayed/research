<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::create(['role'=>'admin']);
    	Role::create(['role'=>'entery']);
    	Role::create(['role'=>'editor']);
    	Role::create(['role'=>'deleter']);
    }
}
