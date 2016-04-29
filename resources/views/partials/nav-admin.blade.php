<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="\post">Admin</a>
</div>



<ul class="nav navbar-right top-nav">
	<li class="dropdown">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	    	<i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b>
	    </a>
	    <ul class="dropdown-menu">
	       <li>
	            <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>Deconnexion</a>
	        </li>
	    </ul>
	</li>
</ul>
 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="/"><i class="fa fa-chrome" ></i> Site Public </a>
        </li>
        <li>
            <a href="/post"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="/post/create"><i class="fa fa-fw fa-edit"></i> Crée un article</a>
        </li>
        
    </ul>
</div>
            <!-- /.navbar-collapse -->



