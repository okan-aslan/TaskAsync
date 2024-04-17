<div class="bg-gray-800 rounded-lg shadow-md p-4 max-w-xs mx-2 my-4">
    <div class="flex flex-col h-full">
        <div class="mb-4">
            <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
            <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:text-blue-600 self-start">Go to Task</a>
        </div>
        <div class="mb-4">
            <p class="text-gray-300">{{ $task->description }}</p>
        </div>
        <div class="text-gray-500 mt-auto">
            <div>Start Date: {{ $task->start_date }}</div>
            <div>End Date: {{ $task->end_date }}</div>
        </div>
    </div>
</div>
