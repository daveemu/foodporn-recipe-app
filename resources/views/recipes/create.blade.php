@extends('layouts.app')

@section('content')
    <template id="ingredientsTemplate">
        <div class="input-field col s12"> 
            <label for="ingredient">Ingredient</label>
            <input type="text" name="ingredient[]" id="ingredient" class="validate">
        </div>
    </template>

    <template id="tasksTemplate">
        <div class="input-field col s12"> 
            <label for="task">Ingredient</label>
            <input type="text" name="task[]" id="task" class="validate">
        </div>
    </template>


    <div class="container">

            <form action="{{ route('create') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="input-field col s12"> 
                        <label for="title">Recipe Title</label>
                        <input type="text" name="title" id="title" class="validate" value="{{old('title')}}">
    
                        @error('title')
                            <span class="helper-text red-text" data-error="wrong">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">      
                    <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Image</span>
                          <input type="file" name="recipe_image" id="recipe_image">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>

                        @error('recipe_image')
                        <span class="helper-text red-text" data-error="wrong">{{ $message }}</span>
                    @enderror
                    </div>    
                </div>

                <div id="ingredients" class="row"> 
                    <h4 class="col s12"> Ingredient List </h4>
                    <div class="input-field col s12"> 
                        <label for="ingredient">Ingredient</label>
                        <input type="text" name="ingredient[]" id="ingredient" class="validate">
                    </div>
                </div>

                <div class="row col s12">
                    <a onclick="addIngredientLine()" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
                    <a onclick="deleteIngredientLine()" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
                </div>

                <div id="tasks" class="row"> 
                    <h4 class="col s12"> Task List </h4>
                    <div class="input-field col s12"> 
                        <label for="task">Ingredient</label>
                        <input type="text" name="task[]" id="task" class="validate">
                    </div>
                </div>

                <div class="row col s12">
                    <a onclick="addTaskLine()" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
                    <a onclick="deleteTaskLine()" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light">
                            Create <i class="material-icons right">send</i>
                        </button>
                    </div>   
                </div>
            </form>

    </div>
@endsection