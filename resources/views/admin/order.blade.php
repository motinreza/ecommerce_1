<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

</head>
<body>
<div class="container-scroller">

@include('admin.sidebar')

@include('admin.header')

<div class="page-body-wrapper">
    <div class="my-5">
        @if(session()->has('message'))
            <h1 class="alert alert-success">{{ session()->get('message') }}</h1>
        @endif

        <div class="row">
            <div class="col-md-11">
                <h1 class="fs-3 text-center">All Order</h1>

                <form method="get" action="{{ url('search') }}" class="form-inline inline-flex">
                    @csrf
                    <input type="text" name="search" placeholder="Search for something.." class="form-control bg-white">
                    <input type="submit" value="Search" class="btn btn-primary" style="background-color: #0c63e4">
                </form>

                <table class="table-bordered text-black bg-light mt-3">
                    <tr>
                        <th class="">Name</th>
                        <th class="">Email</th>
                        <th class="">Phone</th>
                        <th class="">Address</th>
                        <th class="">Product title</th>
                        <th class="">Quantity</th>
                        <th class="">Price</th>
                        <th class="">Payment Status</th>
                        <th class="">Delivery status</th>
                        <th class="">Image</th>
                        <th class="">Delivered</th>
                        <th class="">Print_PDF</th>
                        <th class="">Send_Email</th>
                    </tr>

                    @foreach($order as $order)
                        <tr>
                            <td class="">{{ $order->name }}</td>
                            <td class="" style="width: 15px;">{{ $order->email }}</td>
                            <td class="">{{ $order->phone }}</td>
                            <td class="">{{ $order->address }}</td>
                            <td class="">{{ $order->product_title }}</td>
                            <td class="">{{ $order->quantity }}</td>
                            <td class="">{{ $order->price }}</td>
                            <td class="">{{ $order->payment_status }}</td>
                            <td class="">{{ $order->delivery_status }}</td>
                            <td class=""><img style="width: 80px;" src="productimage/{{ $order->image }}" alt=""></td>
                            <td class="">
                                @if($order->delivery_status == "Processing!")
                                    <a onclick="return confirm('Are you sure this product is delivered?')" href="{{ url('delivered', $order->id) }}" class="btn btn-primary btn-sm">Delivered</a>
                                @else
                                    <p>Delivered!</p>

                                @endif
                            </td>
                            <td class="">
                                <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-info btn-sm">Print_PDF</a>
                            </td>
                            <td class="">
                                <a href="{{ url('send_email', $order->id) }}" class="btn btn-success btn-sm">Send_Email</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>

@include('admin.script')

</body>
</html>









