<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 * @return void
	 */
	public function run ()
	{
		for ($i = 1 ; $i <= 50 ; $i++) {
			$todos = new \App\Todos();
			$todos->title = $i * pi();
			$todos->completed = 0;
			$todos->save();
		}
	}
}
