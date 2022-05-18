<!DOCTYPE html>
<html>
<head>
  <title></title>
 
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
	<!--header-navbar-->
	<nav>
		
	</nav>
	<!--sidebar-->
	<aside>
		

	</aside>

	<!--content-->
	<div >
        <section>
            @yield('content')
        </section>
    </div>

    <!--footer-->
    <footer>
    	
    </footer>

</body>
</html>
