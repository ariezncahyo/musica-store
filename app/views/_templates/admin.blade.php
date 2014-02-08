<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title: -->
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
	<!-- Bootstrap 2.0.4 -->
	{{ HTML::style('css/bootstrap.min.css') }}
	<!-- Font Awesome 2.0 -->
	{{ HTML::style('plugin/font-awesome/css/font-awesome.min.css') }}
	<!-- jQuery Table Sorter Plugin -->
	{{ HTML::style('plugin/jquery.tablesorter/themes/blue/style.css') }}
	{{ HTML::style('plugin/jquery.tablesorter/addons/pager/jquery.tablesorter.pager.css') }}
	<!-- Core Theme Styles -->
	{{ HTML::style('css/style.css') }}
</head>

<body class="sidebar-max"]>

<!--============================= Page Body =================================-->
<!-- #topbar: Top Bar Menu -->
<ul id="topbar" class="on-click">
  <li class="pull-left">
    <h1 id="topbar-title"><i class="icon-cogs"></i>
      <a href="#">Musica Store Panel</a>
    </h1>
  </li>
  <li class="parent pull-right">
    <a href="#" data-toggle="dropdown"><i class="icon-user"></i><span></span></a>
    <ul class="dropdown-menu">
      <li><a href="#" data-target-page="page-user">Change Password</a></li>
      <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
  </li>
</ul>
<!-- /#topbar: Top Bar Menu -->


<div class="container-fluid" id="container">

    <!-- #sidebar: Sidebar -->
    <div id="sidebar">
      <div class="search-mini-wrapper">
        <form class="search-mini" />
          <input type="text" placeholder="Search..." />
          <button><i class="icon-search"></i></button>
        </form>
      </div>      
      <!-- ul.sidebar-menu: Sidebar Menu -->
      <ul class="sidebar-menu on-click" id="main-menu">
        <li class="active">
          <div class="sidebar-menu-item-wrapper">
            <a href="{{ route('admin.index') }}" data-target-page="page-dashboard">
              <i class="icon-home"></i><span>Dashboard</span>
            </a>
          </div>
        </li>
		<li class="parent inactive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#">
              <i class="icon-tags"></i>
              <span>Category</span>
            </a>
            <ul>
              <li><a href="#" data-target-page="page-view-category"><i class="icon-table"></i> <span>View List</span></a></li>
			  <li><a href="#" data-target-page="page-create-category"><i class="icon-plus-sign"></i> <span>Create New</span></a></li>
            </ul>
          </div>
        </li>
		<li class="parent inactive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#">
              <i class="icon-download-alt"></i>
              <span>Product</span>
            </a>
            <ul>
              <li><a href="#" data-target-page="page-view-product"><i class="icon-table"></i> <span>View List</span></a></li>
			  <li><a href="#" data-target-page="page-create-product"><i class="icon-plus-sign"></i> <span>Create New</span></a></li>
            </ul>
          </div>
        </li>
		    <li class="inctive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#" data-target-page="page-store">
              <i class="icon-shopping-cart"></i><span>Store</span>
            </a>
          </div>
        </li>
        <li class="inctive">
          <div class="sidebar-menu-item-wrapper">
            <a href="#" data-target-page="page-user">
              <i class="icon-group"></i><span>User</span>
            </a>
          </div>
        </li
      </ul>
      <!-- /ul.sidebar-menu: Sidebar Menu -->
    </div>
    <!-- /#sidebar: Sidebar -->

    <!-- #content: The Main Content Section -->
	<div id="content">
		<div class="page" id="page-dashboard">
			@yield('dashboard')
		</div>
		<div class="page hidden" id="page-view-category">        
      		@yield('view-category')
      	</div>
		<div class="page hidden" id="page-view-product">        
			@yield('view-product')
		</div>
		<div class="page hidden" id="page-create-category">        
			@yield('create-category')
		</div>
		<div class="page hidden" id="page-create-product">        
			@yield('create-product')
		</div>
    <div class="page hidden" id="page-store">        
      @yield('store')
    </div>
    <div class="page hidden" id="page-user">        
      @yield('user')
    </div>
    <div class="page">        
      @yield('edit')
    </div>
	</div>
    <!-- /#content: The Main Content Section -->

</div><!-- /.container-fluid#container -->

<!--============================= /Page Body ================================-->

  <!-- jQuery -->
  {{ HTML::script('js/jquery-1.8.3.min.js') }}
  <!-- /jQuery -->

  <!-- Bootstrap Components -->
  {{ HTML::script('js/bootstrap.min.js') }}


  <!-- Theme Scripts -->
  {{ HTML::script('js/madmin.js') }}
  {{ HTML::script('js/application.js') }}

  <!-- jQuery Table Sorter Plugin -->
  {{ HTML::script('plugin/jquery.tablesorter/jquery.tablesorter.min.js') }}

</body>
</html>