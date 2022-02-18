<nav style="background-color: #1d80f7">
    <div class="nav-wrapper">
        <a class="brand-logo bold px-3" href="{{ url('/') }}">
            {{ config('app.name', 'Car Dealership App') }}<i class="material-icons">directions_car_filled</i>
        </a>

        <ul class="right hide-on-med-and-down">
            <li><a href="/cars"><i class="material-icons">directions_car_filled</i></a></li>
            <li><a href="/"><i class="material-icons">people</i></a></li>

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

            <li>
                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                    {{Auth::user()->name}} - {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
         
            @endguest
        </ul>
    </div>
</nav>
