@extends('layout.app')

@section('content')
    @include('Components.error-message')
    @include('Components.success-message')

    <div class="bg-gray-800 rounded-lg shadow-md p-4 w-96">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('tasks.edit', $task->id) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                </form>
            </div>
        </div>
        <div>
            <p class="text-gray-300">{{ $task->description }}</p>
        </div>
        <div class="text-gray-500 mt-auto">
            <div>Start Date: {{ $task->start_date }}</div>
            <div>End Date: {{ $task->end_date }}</div>
        </div>
    </div>
@endsection
