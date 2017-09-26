<header>
    <div class="header-content">
        <div class="logo"><a href="{{ url('/') }}" style=" font-weight: bold;"><img src="img/sedna-logo.png" alt="Esports Coach"></a></div>
        <div class="header-nav">
            <nav>
                <ul class="primary-nav">
                    <li><a href="#features" style=" font-weight: bold;">Features</a></li>
                    <li><a href="#assets" style=" font-weight: bold;">Assets</a></li>
                    <li><a href="#blog" style=" font-weight: bold;">About</a></li>
                    <!-- <li><a href="#download">Download</a></li> -->
                </ul>
                <ul class="member-actions">

                    @if (Auth::guest())
                        <li><a href="{{ url('login') }}" class="login" style=" font-weight: bold;">Log in</a></li>
                        <li><a href="{{ url('register') }}" class="btn-white btn-small" style=" font-weight: bold;">Sign up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    @if(Auth::user()->level == 1)
                                        <a href="/admin" style="color: red;">Profile
                                        </a>
                                    @elseif (Auth::user()->level == 2)
                                        <a href="coach/editprofilecoach" style="color: red;">Profile
                                        </a>
                                    @elseif (Auth::user()->level == 3)
                                        <a href="/editprofileuser" style="color: red;">Profile
                                        </a>
                                    @endif
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: red;" >
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endif




                    {{--<li><a href="{{ url('login') }}" class="login" style=" font-weight: bold;">Log in</a></li>--}}
                    {{--<li><a href="{{ url('register') }}" class="btn-white btn-small" style=" font-weight: bold;">Sign up</a></li>--}}
                </ul>
            </nav>
        </div>
        <div class="navicon">
            <a class="nav-toggle" href="#"><span></span></a>
        </div>
    </div>
</header>