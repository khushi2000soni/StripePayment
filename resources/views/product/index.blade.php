<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <div style="display: flex; gap: 3rem;">
        @foreach($products as $product)
            <div class="flex: 1">
                <img src="{{$product->image}}" style="max-width: 100%">
                <h5>{{$product->name}}</h5>
                <p>${{$product->price}}</p>
            </div>
        @endforeach
    </div>

    <form action="{{route('checkout')}}" method="POST">
        @csrf
        <button>Checkout</button>
    </form>
</body>
</html>
