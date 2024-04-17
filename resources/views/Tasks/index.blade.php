@extends('layout.app')

@section('content')
    <div class="flex flex-col justify-center mt-8">
        @include('Components.error-message')
        @include('Components.success-message')

        @foreach ($tasks as $task)
            <div class="bg-gray-800 rounded-lg shadow-md p-4 w-full mx-2 my-4">
                <div class="flex flex-col">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
                        <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:text-blue-600">Go to Task</a>
                    </div>
                    <div class="text-gray-300 mb-4">{{ $task->description }}</div>
                    <div class="flex justify-between text-gray-500">
                        <div class="font-semibold italic">Start Date: {{ $task->start_date }}</div>
                        <div class="font-semibold italic">End Date: {{ $task->end_date }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
