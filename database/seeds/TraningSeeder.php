<?php

use Illuminate\Database\Seeder;
use App\Models\Training;

class TraningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$tranning = new Training();
		$tranning->name = 'Huấn luyện PCCC 01';
		$tranning->people_total = 50;
		$tranning->class_total = 2;
		$tranning->cost = 30;
		$tranning->description = 'huyến luyện Pccc cho công ty con ở Hà Tĩnh';
		$tranning->start_date = '2020-08-06';
		$tranning->end_date = '2020-10-06';
		$tranning->assign_to = 8;
		$tranning->company_id = 2;
		$tranning->user_id = 6;
		$tranning->status = 1;
		$tranning->save();

		$tranning = new Training();
		$tranning->name = 'Huấn luyện PCCC 02';
		$tranning->people_total = 50;
		$tranning->class_total = 3;
		$tranning->cost = 30;
		$tranning->description = 'huyến luyện Pccc cho công ty con ở Hà Nam';
		$tranning->start_date = '2020-08-06';
		$tranning->end_date = '2020-10-06';
		$tranning->assign_to = 3;
		$tranning->company_id = 1;
		$tranning->user_id = 2;
		$tranning->status = 2;
		$tranning->save();

		$tranning = new Training();
		$tranning->name = 'Huấn luyện PCCC 03';
		$tranning->people_total = 50;
		$tranning->class_total = 4;
		$tranning->cost = 35;
		$tranning->description = 'huyến luyện Pccc cho công ty con ở Hải Phòng';
		$tranning->start_date = '2020-08-06';
		$tranning->end_date = '2020-10-06';
		$tranning->assign_to = 9;
		$tranning->company_id = 4;
		$tranning->user_id = 7;
		$tranning->status = 3;
		$tranning->save();

        $tranning = new Training();
        $tranning->name = 'Huấn luyện KTAT về VLNCN';
        $tranning->people_total = 50;
        $tranning->class_total = 3;
        $tranning->cost = 30;
        $tranning->description = 'Huấn luyện KTAT về VLNCN cho công ty con ở Hà Nam';
        $tranning->start_date = '2020-08-06';
        $tranning->end_date = '2020-10-06';
        $tranning->assign_to = 3;
        $tranning->company_id = 1;
        $tranning->user_id = 2;
        $tranning->status = 1;
        $tranning->save();

        $tranning = new Training();
        $tranning->name = 'Huấn luyện sử dụng CCHT';
        $tranning->people_total = 50;
        $tranning->class_total = 3;
        $tranning->cost = 30;
        $tranning->description = 'Huấn luyện sử dụng CCHT cho công ty con ở Hà Nam';
        $tranning->start_date = '2020-08-06';
        $tranning->end_date = '2020-10-06';
        $tranning->assign_to = 3;
        $tranning->company_id = 1;
        $tranning->user_id = 2;
        $tranning->status = 3;
        $tranning->save();
    }
}
