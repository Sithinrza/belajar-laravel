<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="/assets/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-5/css/fontawesome-all.min.css">


	<!-- Main Style Css -->
    <link rel="stylesheet" href="/assets/css/stylee.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">

			<form class="form-detail" action="/register_proses" method="POST">
                @csrf
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="full-name">Name</label>
					<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
                     @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
                <div class="form-row">
					<label for="password">Confirm Password</label>
					<input type="password" name="password_confirmation" id="password_confirmation" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<div class="form-row-last">
					<button type="submit" name="register" class="register">Register</button>
				</div>
                <div class="form-row-login">
                    <span class="txt2">
                        Sudah punya akun? <a href="/">Login</a>
                    </span>
                </div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
