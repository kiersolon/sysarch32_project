@extends('layouts.app')

@section('content')
<div class="container text-white bg-dark p-4">
    <h1 class="text-light">Create New Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label text-light">Item Name:</label>
            <input type="text" name="name" class="form-control bg-secondary text-white">
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Price:</label>
            <input type="number" name="price" class="form-control bg-secondary text-white">
        </div>
        <button type="submit" class="btn btn-success">Save Item</button>
        <a href="{{ route('items.index') }}" class="btn btn-primary">Back to Items List</a>
    </form>
</div>
@endsection
