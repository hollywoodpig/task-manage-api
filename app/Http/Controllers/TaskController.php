<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index()
	{
		return Task::all();
	}

	public function findOne(string $id)
	{
		$task = Task::find($id);

		if ($task) {
			$task->tags;

			return $task;
		}
	}

	public function create(Request $request)
	{
		$request->validate([
			'name' => 'string',
			'description' => 'string'
		]);

		$task = new Task();

		$task->name = $request->input('name');
		$task->description = $request->input('description');

		$task->save();

		return $task;
	}
}
