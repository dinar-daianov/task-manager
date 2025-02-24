@extends('layouts.app')

@section('content')
    <h1>Список задач</h1>

    @if ($tasks->isEmpty())
        <p>Нет задач.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <p>Название задачи: {{ $task->title }}</p>
                    <p>Категория: {{ $task->category?->name ?? 'Без категории' }}</p>
                    <p>Приоритет: {{ $task->priority }}</p>
                    <a href="{{ route('tasks.edit', $task) }}">Редактировать</a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Ссылка для создания новой задачи -->
    <a href="{{ route('tasks.create') }}">Создать задачу</a>
@endsection
