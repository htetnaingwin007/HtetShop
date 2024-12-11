@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Payments</h1>
            <a href="" class="btn btn-primary float-end">
                Create Payment
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('backend.payments.index')}}">payments</a></li>
            
            <li class="breadcrumb-item active">Create Payments</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Payment Lists
            </div>
            <div class="card-body">
                <form action="{{route('backend.payments.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="number" class="form-control" id="id" name="id">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="image" aria-label="Upload" name="logo">
                    </div>
                    <div class="mb-3 row mx-1">
                        <button class="btn btn-lg btn-primary">Save</button>
                    </div>
                    </form>
            </div>
        </div>
        
    </div>
    <div>

    </div>
@endsection