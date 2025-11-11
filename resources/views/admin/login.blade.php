<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | SILAHKAN</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <div class="container">
  <div class="image-section">
    <img src="image/login.png" alt="Gambar UMKM">
  </div>

  <div class="form-section">
    <form id="mitraForm" method="POST" action="{{ route('admin.data') }}">
    @csrf
      <h2>Hello !!</h2>
      <p>Sign UP To Get Started </p>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" required>
      </div>

      <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" required>
      </div>
      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>
</div>
</body>
</html>