@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-light">Edit Item</h1>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label text-light">Item Name</label>
            <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-light">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $item->price }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
