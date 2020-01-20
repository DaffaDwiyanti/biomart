@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($orders)
            <div class="box">
                <div class="box-body">
                    <center><h2>Invoice</h2></center>

                    <!-- <div class="col-md-3 col-md-offset-3"> -->
                        <h2><a href="{{route('admin.print')}}" class="btn btn-primary btn-block">Download All Invoice</a></h2>
                    <!-- </div> -->
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="col-md-3">No Invoice</td>
                                <td class="col-md-3">Date</td>
                                <td class="col-md-3">Customer</td>
                                <td class="col-md-2">Total</td>
                                <td class="col-md-2">Status</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td><a title="Show order" href="{{ route('admin.orders.show', $order->id) }}">{{$order->reference}}</a></td>
                                <td>{{ date('M d, Y h:i a', strtotime($order->created_at)) }}</td>
                                <td>{{$order->customer->name}}</td>
                                <td>
                                    <span class="label @if($order->total != $order->total_paid) label-danger @else label-success @endif">{{ config('cart.currency') }} {{ $order->total }}</span>
                                </td>
                                <td><p class="text-center" style="color: #ffffff; background-color: {{ $order->status->color }}">{{ $order->status->name }}</p></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    {{ $orders->links() }}
                </div>
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection