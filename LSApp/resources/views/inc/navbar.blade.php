


  <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm"> {{-- navbar-light --}}
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav mr-auto">

            </ul> --}}

            <ul class="navbar-nav mr-auto">
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/services">Services</a>
              </li>
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/posts">Blog</a>
              </li>
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/admin">Admin</a>
              </li>
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/admin/login">Admin-Login</a>
              </li>
              <li class="nav-item" style="font-size: 18px !important;">
                <a class="nav-link" aria-current="page" href="/admin/register">Admin-Register</a>
              </li>
              {{-- @if(!Auth::guest())
                <li class="nav-item" style="font-size: 18px !important;">
                  <a class="nav-link" aria-current="page" href="/tf">Techfest</a>
                </li>
              @endif --}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('auth/google') }}">{{ __('Sign In') }}</a>
                        </li>
                    @endif

                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} ({{Auth::getDefaultDriver()}})
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <li>
                            <a class="dropdown-item" href="/dashboard">Dashbord</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                          </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                          </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>