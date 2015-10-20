<!doctype html>
<html>
    <head>
       	@include('includes.head')
    </head>
    <body>
	@include('includes.menu')

	<div class="container-fluid">
		@yield('content')
	</div>
	
        	@include('includes.footer')
    </body>
</html>