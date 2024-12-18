@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $task->description }}</textarea>
    </div>

    <div>
        <label for="long_description">Long Description:</label>
        <textarea id="long_description" name="long_description">{{ $task->long_description }}</textarea>
    </div>

    <div>
        <label for="completed">Completed:</label>
        <input type="checkbox" id="completed" name="completed">
    </div>

    <button type="submit">Update Task</button>
</form>
    </div>
@endsection
