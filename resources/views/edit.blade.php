@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Sửa Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                    id="title" name="title" value="{{ $task->title }}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control @error('description') is-invalid @enderror" 
                    id="description" name="description" rows="3" required>{{ $task->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="long_description" class="form-label">Long Description:</label>
                <textarea class="form-control" id="long_description" name="long_description" rows="5">{{ $task->long_description }}</textarea>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="completed" name="completed" 
                    {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Completed</label>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update Task</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
