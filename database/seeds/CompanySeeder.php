<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$company = new Company();
		$company->name = 'Công ty con 02';
		$company->address = 'Hà Nam';
		$company->phone = '012345678';
		$company->description = 'công ty con chi nhánh hà nam';
		$company->status = 1;
		$company->save();

		$company = new Company();
		$company->name = 'Công ty con 03';
		$company->address = 'Hà Tĩnh';
		$company->phone = '012345678';
		$company->description = 'công ty con chi nhánh hà tĩnh';
		$company->status = 1;
		$company->save();

		$company = new Company();
		$company->name = 'Công ty con 04';
		$company->address = 'Nghệ AN';
		$company->phone = '012345678';
		$company->description = 'công ty con chi nhánh nghệ an';
		$company->status = 1;
		$company->save();

		$company = new Company();
		$company->name = 'Công ty con 05';
		$company->address = 'Hải Phòng';
		$company->phone = '012345678';
		$company->description = 'công ty con chi nhánh hải phòng';
		$company->status = 1;
		$company->save();
    }
}
