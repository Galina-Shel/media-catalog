@extends('layouts.app')

@section('title', 'Карточки')

@section('content')
    <h1>Список карточек</h1>

    @if ($items->count() === 0)
        <p>Карточек пока нет</p>
    @else
    <table style="width: 100%;" border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Тип</th>
                    <th>Создан</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->type?->name }}</td>
                        <td>{{ $item->created_at?->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="margin-top: 16px;">
            {{ $items->links() }}
        </div>
    @endif
@endsection
