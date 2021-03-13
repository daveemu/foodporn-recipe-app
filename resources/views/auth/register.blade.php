@extends('layouts.app')

@section('content')
    <div class="container">

            <form action="{{route('register')}}" method="post" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" class="validate" value="{{old('name')}}">
                    
                        @error('name')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>          
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="username">Username</label>
                        <input id="username" type="text" name="username" class="validate" value="{{old('username')}}">
                    
                        @error('username')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>          
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Email</label>
                        <input id="email" type="email" name="email" class="validate" value="{{old('email')}}">
                    
                        @error('email')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>          
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Password</label>
                        <input id="password" type="password" name="password" class="validate" value="">
                    
                        @error('password')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>          
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Password confirmation</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="validate" value="">
                    
                        @error('password_confirmation')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>          
                </div>

                <div>
                    <button type="submit" class="btn waves-effect waves-light">
                        Register <i class="material-icons right">send</i>
                    </button>
                </div>
        
            </form>

    </div>
@endsection