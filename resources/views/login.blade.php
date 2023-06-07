<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-box {
      max-width: 400px;
      padding: 40px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      animation: slide-in 0.5s ease;
    }
    @keyframes slide-in {
      0% {
        transform: translateY(-100px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
    .login-box h2 {
      font-size: 28px;
      margin-bottom: 30px;
      text-align: center;
    }
    .login-box .form-control {
      border: none;
      border-radius: 20px;
      padding: 15px 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-box .btn-primary {
      border-radius: 20px;
      padding: 12px 20px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <div class="mb-5">
		<img src="{{ asset('assets/img/logo/verdanco-removebg-preview.png') }}" class="card-img-top ht-90 px-5" alt="verdanco">
	</div>
	@if (Session::has('status'))
		<div class="alert alert-danger" role="alert">
			{{ Session::get('massage') }}
		</div>      
	@endif
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </div>
    </form>
  </div>
  
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
