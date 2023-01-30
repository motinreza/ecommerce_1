<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
</head>
<body>
<div class="hero_area">

    @include('home.header')

    <div class="row justify-content-center my-5">
        <div class="col-md-10">

            @if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif

            <h3 class="fs-3 text-center mb-2" style="font-size: 28px;">Show Order</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Product title</th>
                    <th>Product quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery status</th>
                    <th>Image</th>
                    <th>Cancel order</th>
                </tr>

               @foreach($order as $order)
                    <tr>
                        <td>{{ $order->product_title }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ $order->delivery_status }}</td>
                        <td>
                            <img style="width: 80px;" src="productimage/{{ $order->image }}" alt="">
                        </td>

                        @if($order->delivery_status == 'Processing!')
                            <td>
                                <a onclick="return confirm('Are you sure cancel this order?')" href="{{ url('cancel_order', $order->id) }}" class="btn btn-danger btn-sm">Cancel order</a>
                            </td>

                        @else
                            <td>
                                <p>Not Allowed</p>
                            </td>
                        @endif

                    </tr>
                @endforeach

            </table>
        </div>
    </div>

</div>




<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
