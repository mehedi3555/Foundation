        <nav class="navbar navbar-inverse navbar-fixed-top">
                <a class="navbar-brand pull-left" href=" {{ url('/dashboard') }} ">
                    <img src=" {{ asset('FrontEnd/images/roya_logo.png') }} " alt="logo">
                </a>
                <a id="menu-toggle">
                    <i class="material-icons">apps</i>
                </a>
                <div class="navbar-custom-menu hidden-xs">
                    <ul class="navbar navbar-right">
                        <li class="dropdown">
                            <a class='dropdown-button user-pro' href='#' data-activates='dropdown-user'>
                                <img src=" {{ asset('BackEnd/images/admin.png') }} " class="img-circle" height="45" width="50" alt="User Image">
                            </a>
                            <ul id='dropdown-user' class='dropdown-content'>
                            <!--    <li>
                                    <a href="#!"><i class="material-icons">settings</i> Reset Password</a>
                                </li> -->
                                <li>
                                    <a href=" {{ route('logout') }} " onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="material-icons">exit_to_app</i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"     style="display: none;">
                                             @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>