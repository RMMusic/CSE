<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">CSE</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                            class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </li>
    </ul>
    </div>
    <div class="navbar-default sidebar" role="navigation" style="margin-top: 0px;">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{url('/')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sort-desc"></i> Export
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('excel/loadXML')}}">
                                <i class="glyphicon glyphicon-list"></i>  Get XLS Mockup
                            </a>
                        </li>
                        <li>
                            <a href="{{url('excel/toDecan')}}">
                                <i class="glyphicon glyphicon-list"></i> Get XML for Department
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sort-desc"></i> Import
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('excel/importXLS')}}">
                                <i class="glyphicon glyphicon-list"></i>  Import XLS
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-list"></i> ...
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sort-desc"></i> Arhive
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('arhive')}}">
                                <i class="glyphicon glyphicon-list"></i> Arhive XLS
                            </a>
                        </li>
                        <li>
                            <a href="{{url('arhive')}}">
                                <i class="glyphicon glyphicon-list"></i> Arhive XML
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sort-desc"></i> Setting
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('user')}}">
                                <i class="glyphicon glyphicon-list"></i> Users
                            </a>
                        </li>
                        <li>
                            <a href="{{url('language')}}">
                                <i class="fa fa-language"></i> Language
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>