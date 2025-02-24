@extends('layouts.app')

@section('content')
    @csrf
    @method('PUT')

    <form action="{{ route('tasks.update') }}" method="POST">
    <div>
        <label for="priority">
            Приоритет:
        </label>
        <select name="priority" id="priority" required>
            <option value="low" {{ old('priority', 'low') === 'low' ? 'selected' : '' }}>
                Низкий
            </option>
            <option value="medium" {{ old('priority', 'medium') === 'medium' ? 'selected' : '' }}>
                Средний
            </option>
            <option value="high" {{ old('priority', 'high') === 'high' ? 'selected' : '' }}>
                Высокий
            </option>
        </select>
        @error('priority')
        <span class="text-danger">
                    {{ $message }}
                </span>
        @enderror
    </div>

    <div>
        <button type="submit">Сохранить</button>
    </div>
    </form>
@endsection
