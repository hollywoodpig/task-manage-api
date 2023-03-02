<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('tasks_tags', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('task_id')
				->references('id')
				->on('tasks')
				->onDelete('cascade');
			$table->string('tag_id')
				->references('id')
				->on('tags');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('tasks_tags');
	}
};
