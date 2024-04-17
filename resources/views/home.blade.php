@extends('layout.app')

@section('content')
    <div class="relative">
        @include('Components.error-message')
        @include('Components.success-message')
    </div>

    <div class="bg-gray-900 p-8 rounded-lg shadow-lg mt-16">
        <h1 class="text-3xl font-semibold text-white mb-4">Project Description</h1>
        <p class="text-gray-300 mb-6">This project allows logged-in users to manage their tasks by adding, deleting, and editing them. Users can log in to their accounts and manage their tasks as they wish.</p>

        <h2 class="text-2xl font-semibold text-white mb-4">Rankings</h2>
        <p class="text-gray-300 mb-6">The rankings section displays users sorted by the number of tasks they have. The user with the most tasks is displayed at the top, while the user with the least tasks is displayed at the bottom. This creates a ranking among users and identifies the most active users.</p>
    </div>
@endsection
