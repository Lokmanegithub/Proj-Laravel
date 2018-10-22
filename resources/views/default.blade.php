<!doctype html>
<html lang="en">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	@yield('css')
	<body>
		<ul id="" class="">
			<li><a href="#">Accueil</a></li>
			<li><a href="#">Divers</a></li>
			
		</ul><!-- / -->
		@yield('main')

	</body>
</html>