<nav style="background-color: #1d80f7">
    <div class="nav-wrapper">
        <a class="brand-logo bold px-3" href="{{ url('/') }}">
            {{ config('app.name', 'Car Dealership App') }}<i class="material-icons">directions_car_filled</i>
        </a>
    
        <ul class="right hide-on-med-and-down">
            <li><a href="/cars"><i class="material-icons">directions_car_filled</i></a></li>
            <li><a href="badges.html"><i class="material-icons">people</i></a></li>
            
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="">
                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="">
                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class=" dropdown">
                <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
