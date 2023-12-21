<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Search Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <link href="css/welcome.css" rel="stylesheet">
    <style>
        .page{
            margin: auto;
            width: 10%;
            padding: 12px;
        }
    </style>
  </head>
  <body>
    @include('header');
    <div class="pageTitle"><h2 style="text-align: center;margin-top: -40px;">Search your style</h2></div>
    {{-- <form action="/search" method="get" class="page" style="width: 21%">
        <input type="text" name="search" placeholder="Search...">
        <button class="btn btn-dark" type="submit">Search</button>
    </form> --}}
    <div class="page">{{$product->links('pagination::bootstrap-4')}}</div>

    @foreach ($product as $p)
    <div class="card" style="width: 18rem; margin-top: 40px; float: left; margin-left:40px;">
        <img class="card-img-top" src={{$p->image}} alt="Card image cap" style="width:100%; height:325px">
        <div class="card-body">
            <h3>{{$p->name}}</h3>
          <p class="card-text">Rp {{$p->price}}</p>
        </div>
        <a href="/detail/{{$p->id}}" type="button" class="btn btn-info" style="width: 9rem; margin-left:50%">Product Detail</a>
    </div>
    @endforeach

    @include('footer')
</body>
</html>
