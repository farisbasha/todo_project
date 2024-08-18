@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Todo List</h1>
        <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New
            Todo</a>

        <ul class="mt-4 space-y-2">
            @foreach ($todos as $todo)
                <li class="bg-gray-100 p-4 rounded-lg shadow-md flex justify-between items-center">
                    <a href="" class="text-lg font-semibold">{{ $todo->title }}</a>
                    <div class="flex space-x-2">
                        <a href="" class="text-blue-500 hover:underline">Edit</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
