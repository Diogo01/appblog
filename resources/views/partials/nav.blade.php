<div class="container">

	<div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="\">Blog</a>
	</div>

	<div class="collapse navbar-collapse navbar-ex1-collapse">
	     <ul class="nav navbar-nav">
	     	
			 @forelse($categories as $id => $title)
			
		    <li><a href="{{ Action('FrontController@showPostByCat', $id)}}" style="text-transform:capitalize;">{{$title}}</a></li>
		    @empty
		    @endforelse
		</ul>

		<ul class="nav navbar-nav navbar-right">
		    <!-- Authentication Links -->
		    @if (Auth::guest())
		        <li><a href="{{ url('/login') }}">Login</a></li>
		        <li><a class="btn-default" href="{{ url('/register') }}">Identifier</a></li>
		    @else
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                {{ Auth::user()->name }} <span class="caret"></span>
		            </a>

		            <ul class="dropdown-menu" role="menu">
		            	<li><a href="{{ url('/post') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> Admin </a></li>
		                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Déconnexion </a></li>
		            </ul>
		        </li>
		    @endif
		</ul>
	</div>

</div>

