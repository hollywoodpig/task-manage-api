<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Tag extends Model
{
	use HasFactory;

	protected $hidden = ['pivot'];

	public function tasks()
	{
		return $this->belongsToMany(
			Task::class,
			'tasks_tags',
			'task_id',
			'tag_id'
		);
	}
}
