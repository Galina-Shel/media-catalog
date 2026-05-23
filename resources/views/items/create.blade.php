@extends('layouts.app');

@section('title', 'Создание карточки')

@section('content')
    <h1>Создать карточку</h1>

    @if (session('success'))
            <div class="alert alert--success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert--danger">
                <b>Ошибки:</b>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form" method="POST" action="{{ route('items.store') }}">
            @csrf

            <div class="form-row">
                <label class="form-label" for="title">Название</label><br>
                <input
                    class="form-input"
                    id="title"
                    name="title"
                    type="text"
                    value="{{ old('title') }}"
                >
            </div>

            <div class="form-row">
                <label class="form-label" for="item_type_id">Тип</label><br>
                <select class="form-select" id="item_type_id" name="item_type_id">
                    <option value="">-- выбери тип --</option>

                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" @selected(old('item_type_id') == $type->id)>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn" type="submit">Создать</button>
        </form>

        <p class="link-back">
            <a href="{{ route('items.index') }}">← Назад к списку</a>
        </p>
    </div>
@endsection
