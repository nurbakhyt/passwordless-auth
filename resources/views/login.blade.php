<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>

  <div class="container">
    <form method="POST" class="login-form">
      {{ csrf_field() }}
      <h2 class="login-form__heading">Log In</h2>
      <div class="form-group">
        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
      </div>
      
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
  
</body>
</html>