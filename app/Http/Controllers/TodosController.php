<?php

namespace App\Http\Controllers;

use App\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
	public function __construct ()
	{
		$this->middleware('cors');
	}
	
	public function index ()
	{
		return Todos::all()->toJson();
	}
	
	public function show ($id)
	{
		return Todos::find($id)->toJson();
	}
	
	public function store (Request $request)
	{
		$data = [
			'title'     => $request->get('title') ,
			'completed' => 0
		];
		$todo = Todos::create($data);
		
		return $todo;
	}
	
	public function update ($id)
	{
		$todo = Todos::find($id);
		$todo->completed = !$todo->completed;
		$todo->save();
		
		return $todo;
	}
	
	public function destroy ($id)
	{
		$todo = Todos::find($id);
		$todo->delete();
		
		return response()->json([ 'delete' ]);
	}
}
