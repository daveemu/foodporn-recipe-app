@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            @if ($recipes->count())
                @foreach ($recipes as $recipe)
                    
                        <div class="col s12 l6">
                        <div class="card">
                            <div class="card-image">
                                @if($recipe->image)
                                <img src="/storage{{$recipe->image}}" class="h-48 w-full object-cover object-center">
                                @else
                                <img src="/storage/uploads/images/default.jpg" class="h-48 w-full object-cover object-center">
                                @endif
                                <span class="card-title">{{$recipe->title}}</span>
                            </div>
                            <div class="card-content">
                            <p>{{$recipe->user->username}} - {{$recipe->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('recipe.detail', $recipe) }}">Show Recipe</a>
                            </div>
                        </div>
                        </div>
                    
                @endforeach
            
            @endif
        </div>



    </div>

@endsection