@extends('layouts.app')

@section('content')
<div class="container py-5">
    <a href="{{ url('/') }}" class="btn btn-outline-light mb-3">
        <i class="fas fa-arrow-left"></i> Back
    </a>

    <h1 class="text-center text-light">Items List</h1>
    <div class="text-end mb-3">
        <a href="{{ route('items.create') }}" class="btn btn-success">Create New Item</a>
    </div>
    <div class="card bg-dark text-white">
        <div class="card-body">
            @if ($items->isEmpty())
                <p class="text-center">No items found.</p>
            @else
                <ul class="list-group">
                    @foreach ($items as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-secondary text-white">
                            <span>{{ $item->name }} - ${{ $item->price }}</span>
                            <div>
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>

<style>
    body {
        background-color: #121212;
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
    }
    .btn-success {
        background-color: #28a745;
        border: none;
    }
    .btn-success:hover {
        background-color: #218838;
    }
    .btn-warning {
        color: #000;
    }
</style>
@endsection
