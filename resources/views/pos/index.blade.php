@extends('layouts.main')
@section('title', 'Orders')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $title ?? '' }}</h5>
                        <div class="mt4 mb-3">
                            <div align="right" class="mb-3">
                                <a class="btn btn-primary" href="{{ route('pos.create') }}">Add Orders</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Order Code</th>
                                        <th>Order Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $index => $data)
                                        <tr>
                                            <td>{{ $index += 1 }}</td>
                                            <td>{{ $data->order_code }}</td>
                                            <td>{{ $data->order_date }}</td>
                                            <td>{{ $data->order_amount }}</td>
                                            <td>{{ $data->order_status ? 'Paid' : 'Unpaid' }}</td>
                                            <td>
                                                <a href="{{ route('pos.show', $data->id) }}" class="btn btn-sm btn-secondary">
                                                    <i class="bi bi-detail"></i> Show
                                                </a>
                                                <a href="{{ route('pos.edit', $data->id) }}" class="btn btn-sm btn-success">
                                                    <i class="bi bi-print"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection