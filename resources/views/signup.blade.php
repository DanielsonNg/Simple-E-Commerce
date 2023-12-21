
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>SignUp</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      *{
        width: 100%;
      }
      .content{
        margin: auto;
        width: 30%;
        padding: 10px;
      }
    </style>
  </head>
  <body class="text-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        </ul>
    </div>
    @elseif(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

<main class="form-signin m-auto">
  <form method="POST" action="/signup">
    @csrf
    <div class="content">
        <br><br><br>
        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Email">
          <label for="floatingPassword">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
            <label for="floatingInput">Password</label>
          </div>
          <div class="form-floating">
            <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="Phone">
            <label for="floatingInput">Phone Number</label>
          </div>
          <div class="form-floating">
            <input type="text" name="address" class="form-control" id="floatingInput" placeholder="Address">
            <label for="floatingInput">Address</label>
          </div>
        <button class="btn btn-lg btn-primary" type="submit">Confirm</button>
        <p class="mt-5 mb-3 text-muted">&copy; Interia 2022</p>

    </div>

  </form>
</main>



  </body>
</html>
