<nav class="navbar navbar-expand-lg navbar-light" style="background: #b71c1c ">
      <div class="container">
  <a class="navbar-brand" href="{{url('bihero')}}" style="color: #fff"><img src="{{asset('upload/hero.jpg')}}" style="width: 30px; height: 30px"><b>BIHERO</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">
            @if(Auth::user()->role == "1")
            <li class="nav-item active">
              <a class="nav-link" href="{{url('bihero/create')}}" style="color: #fff">tambah
                <span class="sr-only">(current)</span>
              </a>
            </li>
          
              <ul class="nav navbar-top-links navbar-right">
               <li class="nav-item active">
        <a class="nav-link" href="{{url('bihero/table')}}" style="color: #fff"> data<span class="sr-only">(current)</span></a>
          @endif
                @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: #fff">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
            </ul>
          </ul> 
  </div>
  </div>
</nav>