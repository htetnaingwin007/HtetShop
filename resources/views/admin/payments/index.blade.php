@extends('layouts.admin')
@section('content')
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Items</h1>
            <a href="{{route('backend.payments.create')}}" class="btn btn-primary float-end" >
                Create Payment
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('backend.payments.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Items</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Post Lists
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php 
                            $i=1;
                        @endphp
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$payment->id}}</td>
                                <td>{{$payment->name}}</td>
                                <td><img src="{{$payment->logo}}" alt="" width="50" height="50"></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                {{$payments->links()}}
            </div>
        </div>
        
    </div>
@endsection