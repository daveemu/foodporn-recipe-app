<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="FoodPorn Recipe App">
  <meta name="author" content="FoodPorn">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodPorn Recipes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{ asset('js/recipe.js')}}"></script>
</head>

<body>

    <nav>
        <div class="nav-wrapper">
          <a href="/" class="brand-logo"><i class="material-icons">restaurant</i>FoodPorn</a>
          <a href="/" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('recipes')}}">Show Recipes</a></li>
            @auth
            <li><a href="{{route('create')}}">Add Recipes</a></li>
            @endauth

            @guest
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            @endguest

            @auth
            <li>  
                <a href="javascript:;" onclick="document.getElementById('logoutform').submit();">Logout</a>             
            </li>
            @endauth

          </ul>
        </div>
      </nav>

      <ul id="mobile-demo" class="sidenav">
        <li><a href="{{route('recipes')}}">Show Recipes</a></li>
        @auth
        <li><a href="{{route('create')}}">Add Recipes</a></li>
        @endauth

        @guest
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Register</a></li>
        @endguest

        @auth
        <li>
            <a href="javascript:;" onclick="document.getElementById('logoutform').submit();">Logout</a>          
        </li>
        @endauth

      </ul>

    <form id="logoutform" action="{{route('logout')}}" method='post'>
        @csrf
    </form> 
            

    @yield('content')
</body>
</html>