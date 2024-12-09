@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Items</h1>
            <a href="" class="btn btn-primary float-end">
                Create Item
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Items</li>
            <li class="breadcrumb-item active">Create items</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Post Lists
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="codeno" class="form-label">Code NO</label>
                    <input type="text" class="form-control" id="codeno">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" aria-label="Upload">
                    
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Price</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Discount</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="instock" class="form-label">Instock</label>
                    <select class="form-select" id="instock">
                        <option value="1" selected>Yes</option>
                        <option value="2">No</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category">
                        <option value="1" selected>Choose Category</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                </div>
                <div class="mb-3">
                    <div class="">
                        <label for="floatingTextarea2" class="form-label">Descriptions</label>
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>  
                <div class="mb-3 row mx-1">
                    <button class="btn btn-lg btn-primary">Save</button>
                </div>

            </div>
        </div>
        
    </div>
    <div>

    </div>
@endsection