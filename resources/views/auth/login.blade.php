@extends('layouts.app')

@section('content')
    <div class="container">
        


            <form action="{{route('login')}}" method="post" class="col s12">
                @csrf

                <div class="row">
                    <div class="input-field col s12"> 
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="validate" value="{{old('email')}}">
    
                        @error('email')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12"> 
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="validate" value="">
    
                        @error('password')
                            <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12"> 
                        <label>
                            <input type="checkbox" name="remember" id="remember" class="filled-in" checked="checked" />
                            <span>Remember me</span>
                          </label>
                    </div>
                </div>

                @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">           
                    {{ session('status') }}     
                 </div>
                 @endif
                 
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light">
                            Login <i class="material-icons right">send</i>
                        </button>
                    </div>   
                </div>


        
            </form>


    </div>
@endsection