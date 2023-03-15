

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="background: #948568; border: 1px solid black;">
				<div class="custom-menu">
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="index.html" class="logo"></a></h1>
	        <ul class="list-unstyled components mb-5">

	          <li>
	              <a href="/dashboard">Dashboard</a>
	          </li>

	          <li>
              <a href="/products">Kelola Produk</a>
	          </li>
	          <li>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="tes align-items-center text-custom text-decoration-none bg-transparent border-0">
                    <span class="">Logout</span>
                  </button>
                </form>
	          </li>
	        </ul>




	      </div>
    	</nav>




        <!-- Page Content  -->

{{--
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>My App</header>
  <ul>
    <li>
        <a href="/dashboard">Dashboard</a>

    </li>
    <li>
        <a href="/products">Kelola Produk</a>

    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="d-flex align-items-center text-custom text-decoration-none bg-transparent border-0">
              <span class="d-none d-sm-inline mx-1">Logout</span>
            </button>
          </form>
    </li>
  </ul>
</div>

  </body>
</html>




 --}}
