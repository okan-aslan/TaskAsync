@extends('layout.app')

@section('content')
    @include('Components.error-message')
    @include('Components.success-message')

    <div class="bg-gray-900 text-white p-8 rounded-lg shadow-md border-2 border-gray-600 rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">Create Task</h1>
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold mb-2">Title:</label>
                <input type="text" id="title" name="title"
                    class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('title')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold mb-2">Description:</label>
                <textarea id="description" name="description" rows="3"
                    class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500"></textarea>
                    @error('description')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="start_date" class="block text-sm font-semibold mb-2">Start Date:</label>
                <input type="date" id="start_date" name="start_date"
                    class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('start_date')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="mb-6">
                <label for="end_date" class="block text-sm font-semibold mb-2">End Date:</label>
                <input type="date" id="end_date" name="end_date"
                    class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('end_date')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
            </div>
        </form>
    </div>
@endsection

