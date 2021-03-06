<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/') }}">
                <span class="logo-text">{{ config('app.name') }}</span>
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                @guest
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li><a class="nav-item" href="{{ env('APP_URL') . '/login' }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-item" href="{{ env('APP_URL') . '/register' }}">{{ __('Register') }}</a></li>
                    </ul>
                @else
                    <notification-widget></notification-widget>
                    <div class="dropdown">
                        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown" aria-expanded="false">
                            <img class="avatar" src="{{ Auth::user()->gravatar }}" alt="{{ Auth::user()->name }}">
                            <span class="ml-2 d-none d-lg-block">
                                <span class="text-default">{{ Auth::user()->name }}</span>
                              @if(Auth::user()->is_admin)
                                  <small class="text-muted d-block mt-1">Administrator</small>
                              @endif
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="position: absolute; transform: translate3d(136px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
                            @if(Auth::user()->is_admin)
                                <a class="dropdown-item" href="{{ url('/horizon') }}">
                                   Queue Management
                                </a>

                                <div class="dropdown-divider"></div>
                            @endif

                            <a class="dropdown-item" href="{{ url('/home') }}">
                                <i class="dropdown-icon fe fe-home"></i> Dashboard
                            </a>

                            <a class="dropdown-item" href="{{ url('/account') }}">
                                <i class="dropdown-icon fe fe-user"></i> Profile
                            </a>

                            <a class="dropdown-item" href="{{ url('/account/settings') }}">
                                <i class="dropdown-icon fe fe-settings"></i> Settings
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="https://twitter.com/laraventscom">
                                <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                <i class="dropdown-icon fe fe-log-out"></i> Sign out

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                    @endguest
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>

<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
                <nav-search></nav-search>
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/c') }}" class="nav-link">Conferences</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/h') }}" class="nav-link">Hackathons</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/m') }}" class="nav-link">Meetups</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>