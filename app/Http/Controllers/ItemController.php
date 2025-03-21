<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Display all items
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Show create item form
    public function create()
    {
        return view('items.create');
    }

    // Store new item in database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        Item::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect()->route('items.index')->with('success', 'Item created successfully!');
    }


    // Show edit form
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Update item in database
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully!');
    }

    // Delete item from database
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item updated successfully!');
    }
}