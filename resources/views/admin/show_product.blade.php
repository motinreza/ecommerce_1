<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.css')

</head>
<body>
<div class="container-scroller">

@include('admin.sidebar')

@include('admin.header')

<div class="container-fluid page-body-wrapper">
    <div class="container">
        @if(session()->has('message'))
            <h1 class="alert alert-success">{{ session()->get('message') }}</h1>
        @endif

        <div class="row justify-content-center mt-5">
            <div class="col-md-11">
                <h1 class="fs-3 text-center">Show Product</h1>
                <table class="table-bordered text-black bg-light mt-3">
                    <tr>
                        <th class="p-2">Product Title</th>
                        <th class="p-2">Description</th>
                        <th class="p-2">Category</th>
                        <th class="p-2">Quantity</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Discount Price</th>
                        <th class="p-2">Product Image</th>
                        <th class="p-2">Action</th>
                        <th class="p-2">Action 2</th>
                    </tr>

                    @foreach($data as $data)
                        <tr>
                            <td class="p-2">{{ $data->title }}</td>
                            <td class="p-2">{{ $data->description }}</td>
                            <td class="p-2">{{ $data->category }}</td>
                            <td class="p-2">{{ $data->quantity }}</td>
                            <td class="p-2">{{ $data->price }}</td>
                            <td class="p-2">{{ $data->discount_price }}</td>
                            <td class="p-2"><img style="width: 80px;" src="productimage/{{ $data->image }}" alt=""></td>
                            <td class="p-2">
                                <a href="{{ url('update_product', $data->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td class="p-2">
                                <a onclick="return confirm('Are you sure this delete?')" href="{{ url('delete_product', $data->id) }}" class="btn btn-danger">Delete</a>
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
