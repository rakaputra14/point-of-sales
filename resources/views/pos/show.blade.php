@extends('layouts.main')
@section('title', 'Order Details')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-5">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">{{ $title ?? '' }}</h3>
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                        <a href="{{ route('print-invoice', $order->id) }}" class="btn btn-success">
                            <i class="bi bi-printer"></i>
                        </a>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Order</h5>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Order Code</th>
                                <td>{{ $order->order_code ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{ $order->order_date ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{{ $order->order_status == 1 ? 'Paid' : 'Unpaid'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order basket</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderDetails as $key => $orderDetail)
                                    <tr>
                                        <td>{{ $key += 1 }}</td>
                                        <td><img src="{{ asset('storage/' . $orderDetail->product->product_photo) }}" alt=""
                                                width="100">
                                        </td>
                                        <td>{{ $orderDetail->product->product_name }}</td>
                                        <td>{{ $orderDetail->qty }}</td>
                                        <td>{{ number_format($orderDetail->order_price) }}</td>
                                        <td>{{ number_format($orderDetail->order_subtotal) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Grand Total</td>
                                    <td colspan="1">
                                        <span class="grandtotal"></span>
                                        <input type="hidden" class="form-control" name="amounttotal" readonly>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">Confirm Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection