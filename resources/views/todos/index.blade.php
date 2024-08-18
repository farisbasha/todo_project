@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Todo List</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('createTodo') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New
            Todo</a>

        <ul class="mt-4 space-y-2">
            @foreach ($todos as $todo)
                <x-todos.todo-card :todo="$todo" />
            @endforeach
        </ul>
    </div>
@endsection
