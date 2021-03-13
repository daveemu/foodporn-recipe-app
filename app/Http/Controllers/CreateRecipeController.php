<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Ingredient;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CreateRecipeController extends Controller
{

    public function index() 
    {
        return view('recipes.create');
    }


    public function store(Request $request) 
    {
        
        $this->validate($request, [
            'title' => 'required',
            'recipe_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

       
        $rec = $request->user()->recipes()->create([
            'title' => $request->title           
        ]);

        foreach ($request->ingredient as $value) 
        {
            if($value != null) 
            {
                $rec->ingredients()->create([
                    'name' => $value
                ]);
            }      
        }

        foreach ($request->task as $value) 
        {
            if($value != null) 
            {
                $rec->tasks()->create([
                    'name' => $value
                ]);
            }           
        }

        if($request->has('recipe_image')) 
        {
            $image = $request->file('recipe_image');

            $resized = Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
              })->encode('jpg');

            $name = 'recipeimg_' . time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();

            Storage::put("public/{$filePath}", $resized->__toString());
            $rec->image = $filePath;
            $rec->save();
        }

        return redirect()->route('recipes');
        
    }
}
