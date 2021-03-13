<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() 
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->get();
        return view('recipes.index', [
            'recipes' => $recipes
        ]);
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.detail', [
            'recipe' => $recipe
        ]);
    }

    public function destroy(Recipe $recipe)
    {
        if(!$recipe->ownedBy(auth()->user())) {
            abort(403, 'Unauthorized action.');
        }

        $recipe->delete();
        return redirect()->route('recipes');
    }

}
