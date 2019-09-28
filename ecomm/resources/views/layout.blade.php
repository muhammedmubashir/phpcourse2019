<html>

<head>
	<link rel="stylesheet" type="text/css" 
	href="{{ URL('assets/css/bootstrap.min.css')}}">

</head>
    <body>
        <div>
        	<h1>Almari Online Store</h1>
        </div>

        <div>
            @include("_navbar")
        </div>


        <div class="container">
            @yield('content')
        </div>
    </body>

    <link rel="stylesheet" type="text/css" 
	href="{{ URL('assets/js/bootstrap.min.js')}}">

</html>