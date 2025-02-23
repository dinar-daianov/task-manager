@extends('layouts.app')

@section('content')
    <h1>Создание задачи</h1>

    <form action="{{ route('task.store') }}" method="POST">
        @csrf

        <!-- Название задачи -->
        <div>
            <label for="title">
                Название:
            </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Описание задачи -->
        <div>
            <label for="description">
                Описание:
            </label>
            <textarea type="text" name="description" id="description">
                {{ old('description') }}
            </textarea>
            @error('description')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Выбор категории -->
        <div>
            <label for="category_id">
                Категория:
            </label>
            <select name="category_id" id="category_id" required>
                <option value="">
                    Выберите категорию
                </option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Кнопка отправки -->
        <button type="submit">Создать задачу</button>
    </form>
@endsection
