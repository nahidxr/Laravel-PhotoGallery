<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
        <!-- Sidebar toggle button-->
        <div>
            <ul class="nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu"
                        role="button">
                        <i class="nav-link-icon mdi mdi-menu"></i>
                    </a>
                </li>

        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- full Screen -->
                {{-- <li class="search-bar">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </li> --}}
               
                {{-- <li> <a href="{{ route('admin.logout') }}">Logout</a></li> --}}
                <!-- User Account-->

                <li class="dropdown user user-menu" class="mt-5">
                    {{-- <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown"
                        title="User">
                        <img src="{{asset('upload/no_image.png')}}"
                    alt="">
                    </a> --}}

                    <a href="{{ route('admin.logout') }}">Logout</a>
                    {{-- <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                        class="ti-lock text-muted mr-2"></i> Logout</a>
                    <button>Logout</button>
                </li>
            </ul> --}}
            </li>


            </ul>
        </div>
    </nav>
</header>
