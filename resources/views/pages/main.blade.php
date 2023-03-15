
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('sidebar-02/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('form-17/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('sidebar-02/css/stylee.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">


  </head>
  <body>
            <!-- Sidebar -->
            @include('pages.sidebar')
            <!-- End Sidebar -->

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')

            </div>
		</div>

  </body>
</html>
