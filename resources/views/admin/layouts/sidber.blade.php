<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{asset('admin')}}/https://colorlib.com/polygon/elaadmin/index.html"><i
                            class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>quizze</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('admin.quize.create')}}">Buttons</a></li>
                        
                    </ul>
                </li>
               

                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>UserRole</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('user_role.create')}}">create</a></li>
                        
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</aside>
