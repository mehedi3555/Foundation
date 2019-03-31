<div class="main-sec" id="home">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light shift">
                <div class="logo"> 
                    <a class="roya_logo" href=" {{ url('/') }} ">
                        <img src=" {{ asset('FrontEnd/images/main_logo.png') }} " alt="">
                    </a>
                </div>
                <div class="welcome">
                    <p>@yield('welcome')</p>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-margin">
                        <li class="nav-item @yield('class1')">
                            <a class="nav-link" href=" {{ url('/') }} ">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('class2')">
                            <a class="nav-link" href=" {{ url('/about-us') }} ">About Us</a>
                        </li>
                        <li class="nav-item dropdown @yield('project')">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Projects
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @foreach($projects as $data)
                                    <a class="dropdown-item sub_menu" href=" {{ url('/project-view/'.$data->id) }} ">{{$data->name}}</a>
                                    <div class="dropdown-divider d-driver"></div>
                                @endforeach

                            </div>
                        </li>
                        <li class="nav-item @yield('class3')">
                            <a class="nav-link" href=" {{ url('/need-help') }} ">Need Help?</a>
                        </li>
                        <li class="nav-item @yield('class4')">
                            <a class="nav-link" href=" {{ url('/want-help') }} ">Want to Help?</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>