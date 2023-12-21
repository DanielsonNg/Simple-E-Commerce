<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Welcome Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
<link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<meta name="theme-color" content="#712cf9">
{{-- <link href="css/welcome.css" rel="stylesheet"> --}}
  <style>
      .content{
        /* background-image: url('images/welcomeimage.jpg'); */

        background-position: center;
        background-size: cover;
        /* background-color: black; */
        height: 800px;
        margin-top: -25px;

      }
      .content>img{
        position: absolute;
        opacity:95%;
        width: 100%;
        height:800px;
        z-index: -3;
      }
      .col-lg-6{
        margin-right: 650px;
        margin-top: 225px;
        color:white;
        font-weight: bold;
      }
      .welcomeTitle{
        font-size: 34px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
  </style>
  </head>
  <body>
<main>
  <h1 class="visually-hidden">Headers examples</h1>
  <header>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <div class="welcomeTitle"></div>
        </ul>
        <div class="col-md-3 text-end">
            <a href="/login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
        </div>
      </header>
  </header>
  <div class="content">
  <img src="images/welcomeimage.jpg">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold">Interia</h1>
        <p class="lead"><b>Online store for furniture shopping. Join now to get a good deal of our products with special price. We offer the best value for your best experience.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/signup"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Sign Up</button></a>
        </div>
      </div>
    </div>
  </div>

  @include('footer')
  </div>
    <script src="front/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
