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

        $manager = new User();
        $manager->name = 'Admin01';
        $manager->email = 'admin01@gmail.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($role_admin);

        $employee = new User();
        $employee->name = 'Employee 01';
        $employee->email = 'employee01@gmail.com';
        $employee->password = bcrypt('123456');
        $employee->company_id = 1;
        $employee->save();
        $employee->roles()->attach($role_employee);

        $saler = new User();
        $saler->name = 'Manager 01';
        $saler->email = 'manager01@gmail.com';
        $saler->password = bcrypt('123456');
        $employee->company_id = 1;
        $saler->save();
        $saler->roles()->attach($role_manager);

		$employee = new User();
		$employee->name = 'Employee 02';
		$employee->email = 'employee02@gmail.com';
		$employee->password = bcrypt('123456');
		$employee->company_id = 1;
		$employee->save();
		$employee->roles()->attach($role_employee);

		$saler = new User();
		$saler->name = 'Manager 02';
		$saler->email = 'manager02@gmail.com';
		$saler->password = bcrypt('123456');
		$employee->company_id = 1;
		$saler->save();
		$saler->roles()->attach($role_manager);

        $employee = new User();
        $employee->name = 'Employee 03';
        $employee->email = 'employee03@gmail.com';
        $employee->password = bcrypt('123456');
        $employee->company_id = 2;
        $employee->save();
        $employee->roles()->attach($role_employee);

        $employee = new User();
        $employee->name = 'Employee 04';
        $employee->email = 'employee04@gmail.com';
        $employee->password = bcrypt('123456');
        $employee->company_id = 4;
        $employee->save();
        $employee->roles()->attach($role_employee);

        $saler = new User();
        $saler->name = 'Manager 03';
        $saler->email = 'manager03@gmail.com';
        $saler->password = bcrypt('123456');
        $employee->company_id = 2;
        $saler->save();
        $saler->roles()->attach($role_manager);

        $saler = new User();
        $saler->name = 'Manager 04';
        $saler->email = 'manager04@gmail.com';
        $saler->password = bcrypt('123456');
        $employee->company_id = 4;
        $saler->save();
        $saler->roles()->attach($role_manager);
    }
}
