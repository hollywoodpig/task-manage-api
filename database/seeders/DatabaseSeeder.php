<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Tag::factory()->count(10)->create();
		$tagIds = DB::table('tags')->pluck('id')->toArray();

		Task::factory()->count(10)->create()->each(function ($task) use ($tagIds) {
			$task->tags()->sync(array_rand($tagIds, mt_rand(1, 5)));
		});
	}
}
