@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6">Todo Details</h2>

        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $todo->title }}</h3>

            <p class="text-gray-700 mb-6">{{ $todo->description }}</p>


        </div>

        <div class="mt-6">
            <a href="{{ route('todosList') }}" class="text-blue-500 hover:underline">Back to Todos</a>
        </div>
    </div>
@endsection
