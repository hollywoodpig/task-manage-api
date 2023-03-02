<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
	public function index()
	{
		return Tag::all();
	}

	public function findOne(string $id)
	{
		$tag = Tag::find($id);

		if ($tag) {
			$tag->tasks;

			return $tag;
		}
	}

	public function create(Request $request)
	{
		$request->validate([
			'name' => 'string'
		]);

		$tag = new Tag();

		$tag->name = $request->input('name');

		$tag->save();

		return $tag;
	}
}
