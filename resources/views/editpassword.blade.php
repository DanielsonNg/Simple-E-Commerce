<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Edit Password Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <style>
        .content{
            margin: auto;
            width: 30%;
            padding: 10px;
            /* justify-content: center;
             text-align: center; */
        }

        .info{
            font-size: 24px;
        }
        .errormsg{
            color: red;
            text-align: center;
        }

    </style>
  </head>
  <body>
    @include('header')
    <h1 style="text-align: center">Edit Password</h1>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger" style="text-align: center;">
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
                <br>
            @endforeach
        </ul>
    </div>
    @endif
    </div>
    <div class="content">
        <form action="/editPassword" method="POST">
            @csrf
        Old Password
        <br>
        <input type="text" name="Old_Password" id="oldpass" placeholder="5 - 20 Letter" style="width: 100%">
        <br>
        New Password
        <br>
        <input type="text" name="New_Password" id="newpass" placeholder="5 - 20 Letter" style="width: 100%">
        <br>
        <br>
        <button type="submit" class="btn btn-success">Update Password</button>
        </form>
        <a href="/profile">
            <button type="button" class="btn btn-danger" style="margin-top:20px">Back</button>
        </a>
    </div>
    @include('footer')
  </body>

</html>

