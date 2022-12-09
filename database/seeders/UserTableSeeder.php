<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        $roles = Role::all();
        $users = User::factory(10)->create();

        foreach ($users as $user) {
            foreach ($roles as $role) {
                $role->users()->attach($role->id);
            }
        }
    }
}
