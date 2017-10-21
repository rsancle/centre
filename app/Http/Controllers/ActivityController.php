<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
    public function create(Request $request)
	{		
		$activity = Activity::create($request->all());
		
		$activity->save();

		$result = "¡Perfecte! Activitat creada correctament. ";

		return  response()->json($result);
	}

	public function delete($id)
	{		
		Activity::find($id)->where('id', $id)->delete();	

		$result = "¡Perfecte! Activitat eliminada correctament.";

		return  response()->json($result);
	}

	public function show()
	{
		$activity = Activity::all();
		return  response()->json($activity);
	}
}
