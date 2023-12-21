<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Home Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <link href="css/welcome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600&display=swap');
        body{
            font-family: 'Inter', sans-serif;
        }
        .page{
            display: flex;
            width: 100%;
            padding: 12px;
            justify-content: center;
        }
        .categories{
          width: 100%;
          display: flex;
          font-size:12px;
          justify-content: center;
        }
        .categoryCard{
          border-style: outset;
          border-radius: 40px;
          padding: 10px;
          text-align: center;
          color: white;
        }
        .cardCategory-body{
        color: black;
          font-weight: lighter;
        }
        .title{
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
        }
        .btn-info{
            background-color: rgb(176, 212, 84);
            border-color:  rgb(176, 212, 84);
        }
        .primary-button {
            display: flex;
            justify-content: center;
            border-radius: 0px;
            color: white;
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 0.05rem;
            border: 1px solid #0E1822;
            padding: 0.8rem 2.1rem;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 531.28 200'%3E%3Cdefs%3E%3Cstyle%3E .shape %7B fill: %23FF4655 /* fill: %230E1822; */ %7D %3C/style%3E%3C/defs%3E%3Cg id='Layer_2' data-name='Layer 2'%3E%3Cg id='Layer_1-2' data-name='Layer 1'%3E%3Cpolygon class='shape' points='415.81 200 0 200 115.47 0 531.28 0 415.81 200' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
            background-color: #0E1822;
            background-size: 200%;
            background-position: 200%;
            background-repeat: no-repeat;
            transition: 0.3s ease-in-out;
            transition-property: background-position, border, color;
            position: relative;
            z-index: 1;
        }

        .primary-button:hover {
            border: 1px solid #f5981e;
            color: white;
            background-position: 40%;
        }

        .primary-button:before {
            width: 100px;
            height: 20px;
            content: "";
            position: absolute;
            background-color: #0E1822;
            width: 0.2rem;
            height: 0.2rem;
            top: -1px;
            left: -1px;
            transition: background-color 0.15s ease-in-out;
        }

        .primary-button:hover:before {
            background-color: white;
        }

        .primary-button:hover:after {
            background-color: white;
        }

        .primary-button:after {
            content: "";
            position: absolute;
            background-color: #f5981e;
            width: 0.3rem;
            height: 0.3rem;
            bottom: -1px;
            right: -1px;
            transition: background-color 0.15s ease-in-out;
        }
        .shape {
            fill: #0E1822;
        }
        .categoryCard>img{
            border-radius: 20px;
            width: 100%;
        }
    </style>
  </head>
  <body>
    @include('header');
    <form action="/search" method="get" class="page">
        <input type="text" name="search" placeholder="Type Here..." style="width: 500px">
        <div class="button-borders">
            <button class="primary-button" type="submit"> Search
            </button>
          </div>
    </form>
    <div class="title">Categories</div>
    <div class="categories">

    @foreach ($categories as $c)
      <a href="/category/{{$c->id}}">

        <div class="categoryCard" style="width: 15rem; margin-top: 40px; float: left; margin-left:40px;">
            <img src={{$c->image}} alt="" width="100%" height="100px">
            <div class="cardCategory-body">
                <h5>{{$c->name}}</h5>
            </div>
        </div>
      </a>
      @endforeach
    </div>
    <div class="title">Our Products</div>
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
    <br><br>
    <div class="page">
    {{$product->links('pagination::bootstrap-4')}}
    </div>

    @include('footer')

</body>
</html>
