<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order PDF</title>
</head>
<body>
    <h1>Order Details</h1>

    <h2>Customer Name</h2>{{ $order->name }}
    <h2>Customer email</h2>{{ $order->email }}
    <h2>Customer phone</h2>{{ $order->phone }}
    <h2>Customer id</h2><p>{{ $order->user_id }}
    <h2>Product title</h2>{{ $order->product_title }}
    <h2>Product quantity</h2>{{ $order->quantity }}
    <h2>Product price</h2>{{ $order->price }}
    <h2>Product payment_status</h2>{{ $order->payment_status }}
    <h2>Product delivery_status</h2>{{ $order->delivery_status }}
    <h2>Product image</h2>
    {{--<img src="productimage/{{ $order->image }}" alt="">--}}
</body>
</html>
