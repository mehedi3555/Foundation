            <div id="sidebar-wrapper" class="waves-effect" data-simplebar>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="@yield('dashboard')"><a href=" {{ url('/dashboard') }} "><i class="material-icons">dashboard</i>Dashboard</a></li>
                            <li class="@yield('for_project')">
                                <a><i class="material-icons">extension</i>Projects<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="@yield('insertproject')"><a href=" {{ url('/insert') }} ">Insert</a></li>
                                    <li class="@yield('imgupload')"><a href=" {{ url('/upload') }} ">Image Upload</a></li>
                                    <li class="@yield('videoupload')"><a href=" {{ url('/upload-video') }} ">Video Upload</a></li>
                                    <li class="@yield('viewproject')"><a href=" {{ url('/view-project') }} ">View</a></li>
                                </ul>
                            </li>

                            <li class="@yield('needhelp')">
                                <a href=" {{ url('/need-help-view') }} "><i class="material-icons">people_outline</i>Need Help</a>
                            </li>

                            <li class="@yield('wanthelp')">
                                <a href=" {{ url('/want-help-view') }} "><i class="material-icons">people</i>Want to Help</a>
                            </li>

                            <li class="@yield('for_slider')">
                                <a><i class="material-icons">image</i>Slider<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="@yield('sliderup')"><a href=" {{ url('/slider-upload') }} ">Upload</a></li>
                                    <li class="@yield('slider')"><a href=" {{ url('/slider-view') }} ">View</a></li>
                                </ul>
                            </li>
                             <li class="@yield('team')">
                                <a><i class="material-icons">group</i>Executive Team<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="@yield('add')"><a href=" {{ url('/team') }} ">Add</a></li>
                                    <li class="@yield('view')"><a href=" {{ url('/team-view') }} ">View</a></li>
                                </ul>
                            </li>
                            <li class="side-last"></li>
                        </ul>
                    </div>
                </div>
            </div>