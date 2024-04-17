@extends('layout.app')

@section('content')
    <div class="w-full max-w-sm mx-auto">
        @include('Components.error-message')
        @include('Components.success-message')
        <div class="border-2 border-gray-600 rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Register</h1>
            <form class="w-full max-w-sm" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold mb-2">Name:</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('name')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold mb-2">Email:</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('email')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold mb-2">Password:</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('password')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-semibold mb-2">Password
                        Confirmation:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full px-3 py-2 leading-tight bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500">
                    @error('password_confirmation')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg font-medium">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
                    <p class="mt-4">Already have an account? <a href="{{ route('login') }}"
                            class="text-blue-500">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
