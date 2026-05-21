<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\View\View;

class ItemController extends Controller
{
    public function index(): View
    {
        $items = Item::query()
            ->with('type')
            ->latest()
            ->paginate(10);

        return view('items.index', compact('items'));
    }
}
