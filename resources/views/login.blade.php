
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login</title>
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
      .rememberme{
        /* position: relative; */
        display: flex;
        padding: 20px;
        vertical-align: middle;
        justify-content: center;
      }
      .remember{
        margin-top: 4px;
        width: 15px;
        height: 15px;
        margin-right: 20px;

      }
      .cssbuttons-io {
        position: relative;
        font-weight: 500;
        font-size: 18px;
        letter-spacing: 0.05em;
        border-radius: 0.8em;
        border: none;
        background: linear-gradient(to right, #13dade, #8a5ee2);
        color: white;
        overflow: hidden;
        height: 50px;
    }
    .cssbuttons-io span {
        position: relative;
        z-index: 10;
        transition: color 0.4s;
        /* display: inline-flex; */
        align-items: center;
        padding: 0.8em 1.2em 0.8em 1.05em;
    }

    .cssbuttons-io::before,
    .cssbuttons-io::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
     }

    .cssbuttons-io::before {
        content: "";
        background: black;
        width: 120%;
        left: -10%;
        transform: skew(30deg);
        transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
    }

    .cssbuttons-io:hover::before {
        transform: translate3d(100%, 0, 0);
    }

    .cssbuttons-io:active {
        transform: scale(0.95);
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
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
    @endif

<main class="form-signin m-auto">
  <form action="/login" method="POST">
    @csrf
    <div class="content">
        <br><br><br>
        <h1 class="h3 mb-3 fw-normal">Sign In</h1>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email"
          value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""}}">
          <label for="floatingPassword">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password"
            value="{{Cookie::get('mycookiepassword') !== null ? Cookie::get('mycookiepassword') : ""}}">
            <label for="floatingInput">Password</label>
          </div>
          <div class="rememberme">
            <input type="checkbox" name="remember" class="remember" id="remember"
            checked={{Cookie::get('mycookie') !== null}}>
            RememberMe
          </div>
        <div class="loginBtn">
            <button class="cssbuttons-io" type="submit">
            <span>
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" fill="currentColor"></path>
                Login</span>
            </button>
        </div>
        {{-- <button class="btn btn-lg btn-primary" type="submit">Confirm</button> --}}
        <p class="mt-5 mb-3 text-muted">&copy; Interia 2022</p>
    </div>

  </form>
</main>
  </body>
</html>
