<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreItemRequest;

class ItemController extends Controller
{
    public function index(): View //подготавливаем список items
    {
        $items = Item::query()
            ->with('type')
            ->latest()
            ->paginate(10);

        return view('items.index', compact('items'));
    }

    public function create(): View //подготавливаем все для создания нового item
    {
        $types = ItemType::query()
            ->orderBy('name')
            ->get();

        return view('items.create', compact('types'));
    }

    public function store(StoreItemRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['created_by'] = 1; //для MVP (пока нет регистрации)
        //$data['created_by'] = auth()->id(); //после добавления регистрации
        Item::query()->create($data);
        return redirect()
            ->route('items.index')
            ->with('success', 'Карточка добавлена');
    }
}
