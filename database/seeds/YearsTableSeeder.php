<?php

use Illuminate\Database\Seeder;
use App\Year;

class YearsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i = 0; $i < 10; $i++){
			$table = new Year;

			$table->year = rand(1900, 2020);
			$table->new_pullman = rand(1, 10);
			$table->year_bill = rand(1000, 9999999);

			$table->save();
		}
	}
}
