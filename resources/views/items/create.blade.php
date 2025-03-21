@extends('layouts.app')

@section('content')
    <h1>Create New Item</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <button type="submit">Save Item</button>
    </form>

    <a href="{{ route('items.index') }}">Back to Items List</a>
@endsection
