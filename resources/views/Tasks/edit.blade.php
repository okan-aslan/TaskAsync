@extends('layout.app')

@include('Components.error-message')
@include('Components.success-message')

@section('content')
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="bg-gray-800 rounded-lg shadow-md p-4 w-96">
        <div class="mb-4">
            <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full rounded-md bg-gray-700 border-transparent focus:border-gray-600 focus:bg-gray-600 text-white">{{ $task->description }}</textarea>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-300">Start Date</label>
                <input type="date" id="start_date" name="start_date" value="{{ $task->start_date }}" class="mt-1 block w-full rounded-md bg-gray-700 border-transparent focus:border-gray-600 focus:bg-gray-600 text-white">
            </div>
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-300">End Date</label>
                <input type="date" id="end_date" name="end_date" value="{{ $task->end_date }}" class="mt-1 block w-full rounded-md bg-gray-700 border-transparent focus:border-gray-600 focus:bg-gray-600 text-white">
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded text-white">Save</button>
        </div>
    </div>
</form>
@endsection
