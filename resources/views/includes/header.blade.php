<div class="top-menu top-menu-primary">
    <div class="container">
        <p>
            <a class="logo-home" href="/"><span > <img class="logo" src="../images/logo.gif" style="max-height: 50px;margin-top: -13px;"></span>
                <span class="social margin-fix left">
                    <span style="font-weight: bold;font-size: 30px">Сервис за Крводарители</span>
                </span>
            </a>
            <span>
                @guest
                    @if (Route::has('register'))
                        <a class="right" href="/register"><i class="fas fa-lock mr-1"></i> <span>Регистрација</span></a>
                        <a class="right" href="/login"><i class="fas fa-user mr-1"></i> <span>Најава</span></a>
                    @endif
            </span>

        </p>
            @else
                <div class="right dropdown">
                        <a class="right dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} {{ Auth::user()->surname }}
                        </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('user_profile',Auth::user()->id )}}">
                            Профил
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Одјави се') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
    </div><!-- / container -->
</div>
<div id="header" class="header navbar navbar-default" style="margin-top: -14px;height: 70px;">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header navbar-right">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav text-center" style="margin-right: 180px">
                <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> ДOMA</a></li>
                <li class="nav-item"><a class="nav-link" href="/blood_donors"><i class="fa fa-users"></i> КРВОДАРИТЕЛИ</a></li>
                <li class="nav-item"><a class="nav-link" href="/blood_actions"><i class="fa fa-map-marker"></i> КРВОДАРИТЕЛСКИ АКЦИИ</a></li>
                <li class="nav-item"><a class="nav-link" href="/about"><i class="fas fa-info-circle"></i>   ЗА НАС</a></li>
            </ul>
        </div>
            </div>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>
