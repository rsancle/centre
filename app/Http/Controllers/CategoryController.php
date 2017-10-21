<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create(Request $request)
	{		
		$category = Category::create($request->all());
		
		$category->save();

		$result = "¡Perfecte! Categoria creada correctament. ";

		return  response()->json($result);
	}

	public function delete($id)
	{		
		Category::find($id)->where('id', $id)->delete();	

		$result = "¡Perfecte! Categoria eliminada correctament.";

		return  response()->json($result);
	}

	public function show()
	{
		$category = Category::all();
		return  response()->json($category);
	}
}
