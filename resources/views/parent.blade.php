<!-- Disimpan di resources/views/layouts/app.blade.php -->
<html>
	<head>
		<title> Halaman @yield('title')</title>
	</head>
	<body>
		<header>
			<h2>Contoh MasterView</h2>
		</header>
		<br>	
		@section('sidebar')
			Ini adalah master sidebar.	
		@show
		<br>
		@yield('title')
		<br>
		@yield('content')
		<br>

		<footer>ini footer</footer>

	</body>
</html>