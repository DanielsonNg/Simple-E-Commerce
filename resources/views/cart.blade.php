<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Cart Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <link href="css/welcome.css" rel="stylesheet">
  </head>
  <style>
    .check{
      position: absolute;
      right: 150px;
      width: 300px;
      height: 120px;
      margin-top: -100px;
    }
    .checkBtn{
      position: absolute;
      right: -120px;
      width: 250px;
      height: 120px;
    }
    .pageTitle>img{
        margin-left: 40%
    }
  </style>
  <body>
    @include('header');
    @if($cart->first())
        <div class="pageTitle">
            <img src="./images/shoppingCart.png" alt="" style="width: 107px; height:74px;">
            <h2 style="text-align: center;margin-top: -50px;">Cart</h2>
        </div>
        @php
        $count = 0;
        $total = 0;
        foreach ($cart as $p)
        $total +=$p->price*$p->quantity;
        @endphp
        <form action="/checkout" method="POST">
          @csrf
        <div class="check">
          <div class="total"><h4>Total Price: Rp {{$total}}</h4></div>
            <div class="checkBtn">
                @foreach ($cart as $p)
                <input type="hidden" name="quantity" value="{{$p->quantity}}">
                <input type="hidden" name="nama" value="{{$p->name}}">
                <input type="hidden" name="harga" value="{{$p->price}}">
                <input type="hidden" name="product_id" value="{{$p->id}}">
                @endforeach
                <input type="hidden" name="total" value="{{$total}}">
                <button type="submit" class="btn btn-success">Checkout</button>
            </div>
          </div>
        </form>
          @foreach ($cart as $p)
          <div class="card" style="width: 18rem; margin-top: 40px; float: left; margin-left:40px;">
            <img class="card-img-top" src={{$p->image}} alt="Card image cap" style="width:100%; height:325px">
            <div class="card-body">
                <h3>{{$p->name}}</h3>
              <p class="card-text">Rp {{$p->price}}</p>
              <p class="card-text">Quantity: {{$p->quantity}}</p>
              <div>
                  <a href="/editCartPage/{{$p->id}}" class="btn btn-dark">Edit Cart</a>
              </div>
              <div style="margin-left: 90px;margin-top:-38px"><form action="deleteCart/{{$p->id}}">
                  @csrf
                  <button type="submit" class="btn btn-danger">Remove from Cart</button>
                  </form>
              </div>
            </div>
        </div>

        @endforeach

    @else
    <div class="cartEmpty">
    <h1 style="text-align: center">Oops, Your Cart is Empty</h1>
    </div>

    @endif

    @include('footer')
</body>
</html>
