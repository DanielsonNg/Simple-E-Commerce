

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="front/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>History Page</title>
    <style>
        .cardCollection{
            display: flex;
        }
    </style>
</head>
<body>
    @include('header')
    @if ($transaction->first())
        <h1 style="text-align:center">Transaction History</h1>
    @foreach ($transaction as $t)
    <h4><b>{{$t->tanggal_transaksi}}, Total Price: Rp {{$t->total}}</b></h4>
    <h4>Items :</h4>
    <div class="cardCollection">
        @foreach ($t->transaction_details as $p)
        <div class="card" style="width: 10rem;height:200px; margin-top: 10px; float: left; margin-left:40px;">
            <img class="card-img-top" src={{$p->product->image}} alt="Card image cap" style="width:100%; height:105px">
            <div class="card-body">
                <p>{{$p->product->name}}
                    <br>
                    Rp {{$p->product->price}}
                    {{$p->quantity}}
                    @if ($p->quantity == 1)
                        pc
                    @else
                        pcs
                    @endif
                </p>
            </div>
        </div>

        @endforeach
    </div>

    <br><br>
    @endforeach

    @else
    <h1 style="text-align: center">Oops, you haven't purchased anything</h1>
    @endif
    @include('footer')
</body>
</html>









