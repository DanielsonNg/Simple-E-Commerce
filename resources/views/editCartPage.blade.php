<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Edit Cart Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="../front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
  </head>
  <style>
    .productImage{
        float: left;
        margin-right: 40px;
    }
    hr{
        width: 40%;
    }
    .qty{
        float: left;
    }
    .qtyInput{
        margin-right: 20px;
    }
    .btn.btn-success{
        margin left: 40px;
        margin-top:10px;
    }
    .btn.btn-danger{
        margin-left: 400px;
    }
    .errormsg{
        color: red;
    }

  </style>
  <body>
    @include('header');

    <div class="pageTitle"><h2 style="text-align: center;margin-top: -40px; color:gray; font-weight:lighter">Product Detail</h2></div>
        <div class="productImage"><img src="../{{$cart->image}}" width="500px" height="500px"></div>
        <div><h2>{{$cart->name}}</h2></div>
        <div><h5>Rp {{$cart->price}}</h4></div>
        <br>
        <div><h2>Description</h2></div>
        <div>{{$cart->description}}</div>
        <hr>
        <div><h2>Quantity</h2></div>
        <div class="qty">
            <form action="/updateCart/{{$cart->id}}" method="POST">
                @csrf
                <input name="Quantity" type="number" class="form-control" id="qtyInput" placeholder="Minimal 1">
                <button type="submit" class="btn btn-success">Update Quantity</button>
                <div class="errormsg">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    <br>

                    @endforeach
                    @endif
                </div>

            </form>
            <br><br><br>
            <a href="/cart" style="width: 100px"  class="btn btn-danger">Back</a>
            </form>

            </div>

        </div>
    <div>@include('footer')</div>

</body>
</html>
