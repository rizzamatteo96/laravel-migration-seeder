<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($i = 1; $i <= 100; $i++){

			$travel = new Travel;

			$travel->title = 'Viaggio numero ' . $i;
			$travel->departure_date = '2021/01/' . rand(01,31);
			$travel->days = rand(1,30);
			$travel->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quidem assumenda. Minus facilis repudiandae cum eaque modi aliquid quo aut quasi laboriosam totam. Quidem veritatis rerum accusamus fugit, ad sint.";
			$travel->price = rand(100,999);
			$travel->transportation = 'pullman';
			$travel->travel_type = 'viaggio di gruppo';
			
			$travel->save();



			// $table->char('title', 100);
			// $table->date('departure_date');
			// $table->tinyInteger('days');
			// $table->text('description');
			// $table->float('price', 6, 2);
			// $table->char('transportation',50)->default('Pullman');
			// $table->char('travel_type',50);

		}
	}
}
