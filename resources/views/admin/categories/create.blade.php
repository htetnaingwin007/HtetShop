@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Categories</h1>
        <a href="{{route('backend.categories.index')}}" class="btn btn-danger float-end">
            Cancel
        </a>

    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('backend.categories.index')}}">Categories</a></li>
        
        <li class="breadcrumb-item active">Create items</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Post Lists
        </div>
        <div class="card-body">
            <form action="{{route('backend.categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="no" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{old('id')}}">
                    @error('id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" aria-label="Upload" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 row mx-1">
                    <button class="btn btn-lg btn-primary">Save</button>
                </div>
                </form>
        </div>
    </div>
        
</div>
@endsection