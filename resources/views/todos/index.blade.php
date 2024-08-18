@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6">Todo Details</h2>

        <div id="todoList" class="bg-white shadow-md rounded-lg p-6">
            <!-- Todos will be loaded here -->
        </div>

        <div class="mt-6">
            <a href="{{ route('todosList') }}" class="text-blue-500 hover:underline">Back to Todos</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('getAllLatestTodos') }}',
                type: 'GET',
                success: function(data) {
                    var todoList = $('#todoList');
                    todoList.empty(); // Clear the container before appending new data

                    if (data.length > 0) {
                        data.forEach(function(todo) {
                            todoList.append(
                                '<div class="mb-4">' +
                                '<h3 class="text-xl font-semibold text-gray-800 mb-2">' +
                                todo.title + '</h3>' +
                                '<p class="text-gray-700">' + todo.description + '</p>' +
                                '</div>'
                            );
                        });
                    } else {
                        todoList.append('<p class="text-gray-500">No todos found.</p>');
                    }
                },
                error: function(xhr) {
                    alert('Error: ');
                }
            });
        });
    </script>
@endsection
