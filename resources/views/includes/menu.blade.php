<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{URL::to('/')}}">IT GENIUS</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li @yield('active_home')><a href="{{URL::to('/')}}">Home</a></li>
				<li @yield('active_about')><a href="{{URL::to('about')}}">About us</a></li>
				<li @yield('active_service')><a href="{{URL::to('service')}}">Service</a></li>
				<li @yield('active_portfolio')><a href="{{URL::to('portfolio')}}">Portfolio</a></li>
				<li @yield('active_blog')><a href="{{URL::to('blog')}}">Blog</a></li>
				<li @yield('active_contact')><a href="{{URL::to('contact')}}">Contact</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>