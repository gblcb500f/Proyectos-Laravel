 <nav class="navbar navbar-expand-md navbar-light bg-danger">
    <a class="navbar-brand" href="{{route('home')}}">FanBlogs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{-- {{setActive('home')}} --}}">
          <a class="nav-link" href="{{route('home')}}">@lang('Home')</a>
        </li>
        <li class="nav-item {{-- {{setActive('blog')}} --}}">
          <a class="nav-link" href="{{route('projects.index')}}">@lang('Blog')</a>
        </li>
        <li class="nav-item {{-- {{setActive('blog')}} --}}">
          <a class="nav-link" href="{{route('notas.index')}}">@lang('Notas')</a>
        </li>
        
      </ul>
      <div class="form-inline my-2 my-lg-0">
      @guest
      <a class="btn btn-dark" href="{{route('login')}}">Login</a>
      @else 
      <p>User: {{auth()->user()->name}}</p> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#" class="btn btn-dark" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">Cerrar Sesion</a>
     
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
     @endguest
    </div>
    </div>
  </nav>
  
   