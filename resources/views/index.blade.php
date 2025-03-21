
@extends('layouts.app')

@section('content')
    <h1>Items List</h1>
    <a href="{{ route('items.create') }}">Create New Item</a>
    <ul>
        @foreach ($items as $item)
            <li>
                {{ $item->name }} - ${{ $item->price }}
                <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection