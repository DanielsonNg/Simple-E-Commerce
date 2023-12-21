<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Profile Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <style>
        .content{
            margin: auto;
            width: 50%;
            padding: 10px;
            justify-content: center;
            text-align: center;
        }

        .EditPassword{
            float: left;
            margin-left: 50px;

        }
        .EditProfile{
            float: left;
            /* margin-left: 33%; */
        }
        .info{
            font-size: 24px;

        }
        .content{
            margin-top: -400px;
            text-align: left;
            margin-left: 440px;
        }
        #test{
            margin-left: 50px;
        }
    </style>
  </head>
  <body>
    @include('header')
    <img src={{Auth::user()->image}} alt="" width="400px" height="400px">
    <br>
    <div class="content">
        Privilege:
        @if(Auth::user()->role == 'admin')
        <button type="button" class="btn btn-warning" id="test">Admin</button>
        @else
        <button type="button" class="btn btn-light" id="test">Member</button>
        @endif
        <div class="info">
                Username : {{Auth::user()->name}}
            <br>
            Email : {{Auth::user()->email}}
            <br>
            Address : {{Auth::user()->address}}
            <br>
            Phone Number: {{Auth::user()->phone}}
            <br><br>
        </div>
        @if(Auth::user()->role == 'member')
        <div class="EditProfile">
            <form action="/editProfilePage">
                <button type="submit" class="btn btn-primary">Edit Profile</button>
            </form>
        </div>
        <div class="EditPassword" style="float: left;margin-left: 50px;">
            <form action="/editPasswordPage" >
                <button type="submit" class="btn btn-danger">Edit Password</button>
            </form>
        </div>
        @else
        <div>
            <form action="/editPasswordPage" >
                <button type="submit" class="btn btn-danger">Edit Password</button>
            </form>
        </div>
        @endif


    </div>
    @include('footer')
  </body>

</html>

