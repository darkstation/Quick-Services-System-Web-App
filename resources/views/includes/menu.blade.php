<nav role="navigation" class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><img class="logo" src="{{ asset('Images/qsLogoWeb.png') }}"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                

                
                
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Manage Settings<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Stations</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/stations') }}">List of Stations</a></li>
                        <li><a href="{{ url('/stations/add') }}">Add Stations</a></li>
                        <li><a href="{{ url('/stations/map') }}">View Map</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Employees</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/employees') }}">List of Employees</a></li>
                                <li><a href="{{ url('/employees/add') }}">Add Employee</a></li>
                                <li class="dropdown-submenu"><a href="#">more stuff</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Second level</a></li>
                                        <li><a href="#">Second level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Cars</a>
                            <ul class="dropdown-menu">
                                @can('viewMakes')
                                    <li><a href="{{ url('/makes') }}">List of Makes</a></li>
                                @endcan
                                @can('viewModels')
                                    <li><a href="{{ url('/models') }}">List of Models</a></li>
                                @endcan
                                @can('addModel')
                                    <li><a href="{{ url('/models/add') }}">Add Model</a></li>
                                @endcan
                            </ul>
                        </li>
                        <li><a href="{{ url('/locations') }}"> Locations</a></li>
                        @can('addQr')
                            <li><a href="{{ url('/codes/add') }}" >Generate QR Codes</a></li>
                        @endcan
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Services <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/services') }}" >View Services</a></li>
                        <li><a href="{{ url('/services/values') }}">View Service Values</a></li>
                        @can('createServiceValue')
                        <li><a href="{{ url('/services/values/add') }}">Set Service Values</a></li>
                        @endcan
                        <li><a href="{{ url('/services/preferences') }}">View Service Preferences</a></li>
                        @can('addPreference')
                        <li><a href="{{ url('/services/preferences/add') }}">Set Preferences</a></li>
                        @endcan
                        @can('createServiceTypes')
                        <li><a href="{{ url('/services/types') }}">Service Types</a></li>
                        @endcan
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Rewards <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/rewards') }}" >View Rewards</a></li>
                        @can('addReward')
                        <li><a href="{{ url('/rewards/add') }}" >Add Rewards</a></li>
                        @endcan
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Manage Products <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/product">List of products</a></li>
                     @can('createproducts')
                        <li><a href="/product/add">Add new product</a></li>
                        @endcan
                        @can('createUnit')
                        <li><a href="/unit">Manage Units</a></li> 
                        @endcan
                        @can('createCategory')
                        <li><a href="/categories">Manage Categories</a></li> 
                        @endcan
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Manage Transactions <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/transactions">List of Transactions</a></li>
                        <li><a href="/transactions/add">New Transaction</a></li>
                    </ul>
                </li>
                
                @can('createNotifications')
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Notifications <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/notifications/add') }}" >Create Broadcast</a></li>
                    </ul>
                </li>
                @endcan
            </ul>
            <form role="search" class="navbar-form navbar-right" style="margin-right: 2px;">
                <div class="form-group">
                    <input type="text" placeholder="Search Here" class="form-control">
                </div>
            </form>
        </div>
    </div>
</nav>
