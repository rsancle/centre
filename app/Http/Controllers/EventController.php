<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function create(Request $request)
	{		
		$event = Event::create($request->all());

		//Imagen
		$name = str_random(30) . '-' . $request->file('imagefirst')->getClientOriginalName();
        $request->file('imagefirst')->move('images/cartell', $name);
        $event->imagefirst = Event::imagePath(). '/' . $name;

		return route('loginPost');
	}

	public function update(Request $id, $request)
	{		
		$event = Event::find($id)->update($request->all());

		if($event)
		{
			$result = "¡Perfecte! Esdeveniment editat correctament";
		}
		else
		{
			$result = "¡Error al editar l'esdeveniment!";
		}

		return response()->json($result);
	}

	public function delete(Request $id)
	{		
		$event = Event::find($id)->where('id', $id)->delete();	
		
		$event->save();

		$result = "¡Perfecte! Esdeveniment eliminat correctament. ";

		return  response()->json($result);
	}

	public function show()
	{
		$activity = Event::all();
		return  response()->json($activity);
	}
}
