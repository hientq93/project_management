<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'employee')->first();
        $role_admin  = Role::where('name', 'admin')->first();
        $role_manager = Role::where('name', 'manager')->first();

        $employee = new User();
        $employee->name = 'Employee 01';
        $employee->email = 'employee01@example.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $saler = new User();
        $saler->name = 'Manager 01';
        $saler->email = 'manager01@example.com';
        $saler->password = bcrypt('123456');
        $saler->save();
        $saler->roles()->attach($role_manager);

        $manager = new User();
        $manager->name = 'Admin01';
        $manager->email = 'admin01@example.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($role_admin);
    }
}
