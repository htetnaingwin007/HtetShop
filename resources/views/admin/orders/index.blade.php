@extends('layouts.admin')
@section('content')
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">
                @if(Request::is('backend/orderAccept'))
                    Order Accept
                @elseif(Request::is('backend/orderComplete'))
                    Order Complete
                @else
                    Order List
                @endif
            </h1>
            <a href="{{route('backend.orderComplete')}}" class="btn btn-secondary mx-2 float-end" >
                Order Complete List
            </a>
            <a href="{{route('backend.orderAccept')}}" class="btn btn-primary mx-2 float-end" >
                Order Accept List
            </a>
            <a href="{{route('backend.orders')}}" class="btn btn-success mx-2 float-end" >
                Order  list
            </a>

        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Orders list
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Voucher No</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>Payment Method</th>
                            <th>#</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>NO</th>
                            <th>Voucher No</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>Payment Method</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($order_data as $order)
                            @if($order != null)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->voucher_no}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>
                                   <span class="badge
                                    @if($order->status == 'Pending')
                                        {{'text-bg-secondary'}}
                                    @elseif($order->status == 'Accept')
                                        {{'text-bg-primary'}}
                                    @else
                                        {{'text-bg-success'}}
                                    @endif
                                   ">
                                    {{$order->status}}
                                   </span>
                                </td>
                                <td><img src="{{$order->payment->logo}}" alt="" with="40" height="40"></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{route('backend.orders.detail',$order->voucher_no)}}">Detail</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                    
                </table>
                
            </div>
        </div>
        
    </div>

@endsection