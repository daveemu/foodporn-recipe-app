@extends('layouts.app')

@section('content')
    <div class="parallax-container">
        
        @if($recipe->image)
            <div class="parallax"><<img src="/storage/{{$recipe->image}}">
                
            </div>
        @else
            <div class="parallax"><img src="/storage/uploads/images/default.jpg">
            
            </div>     
        @endif

    </div>

        <div class="section white">
            <div class="row container">
                <h1 class="">{{ $recipe->title }}</h1>

                <ul class="collection with-header">
                    <li class="collection-header"><h4>Ingredients</h4></li>
                    @foreach ($recipe->ingredients as $ingredient)
                    <li class="collection-item">{{$ingredient->name}}</li>  
                    @endforeach
                </ul>
    
                <ul class="collection with-header">
                    <li class="collection-header"><h4>Tasks</h4></li>
                    @foreach ($recipe->tasks as $task)
                    <li class="collection-item">{{$task->name}}</li>  
                    @endforeach
                </ul>
                <a class="waves-effect waves-light btn" href="{{ url()->previous() }}">Go Back</a>

                @if ($recipe->ownedBy(auth()->user()))
                    <a class="waves-effect waves-light btn red" onclick="document.getElementById('deleteform').submit();" href="javascript:;">Delete Recipe</a>
                @endif


            </div>
        </div>

        <form id="deleteform" action="{{ route('recipe.destroy', $recipe)}}" method="post">
            @csrf
            @method('DELETE')      
        </form>



            

    
@endsection