<?php

namespace App\Http\Controllers;

use App\Models\SuperHero;
use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    public function store(Request $request)
    {
        $superHero = SuperHero::create([
            'name' => $request->name,
            'power' => $request->power,
        ]);
        return response()->json([
            'message' => 'Superhero created successfully',
            'data' => $superHero,
        ], status: 201);
    }

    public function showAll(){
        $superHero = SuperHero::all();
        return response()->json([
            'message' => 'All Superheroes retrieved successfully',
            'data' => $superHero,
        ], status: 201);
    }

    public function showById($id){
        $superHero = SuperHero::find($id);
        if (!$superHero) {
            return response()->json([
                'message' => 'Superhero not found',
            ], status: 404);
        }
        return response()->json([
            'message' => 'Superhero retrieved successfully',
            'data' => $superHero,
        ], status: 200);
    }

    public function update(Request $request, $id)
    {
        $superHero = SuperHero::find($id);
        if (!$superHero) {
            return response()->json([
                'message' => 'Superhero not found',
            ], status: 404);
        }

        $superHero->update($request->all());
        return response()->json([
            'message' => 'Superhero updated successfully',
            'data' => $superHero,
        ], status: 200);
    }

    public function delete($id)
    {
        $superHero = SuperHero::find($id);
        if (!$superHero) {
            return response()->json([
                'message' => 'Superhero not found',
            ], status: 404);
        }

        $superHero->delete();
        return response()->json([
            'message' => 'Superhero deleted successfully',
        ], status: 200);
    }
}
