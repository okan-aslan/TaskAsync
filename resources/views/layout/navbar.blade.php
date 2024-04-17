<nav class="bg-gray-800 p-4 flex justify-between items-center fixed top-0 w-full z-50">
    <div>
        <a href="/" class="text-lg font-semibold ml-8">{{ config('app.name') }}</a>
    </div>
    <div class="flex items-center">
        <a href="{{route('rankings')}}" class="mr-4">Rankings</a>
        @auth
            <a href="{{route('tasks.create')}}" class="mr-4">Create Task</a>
            <a href="{{route('tasks.index')}}" class="mr-4">MyTasks</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="mr-4">Logout</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="mr-4">Login</a>
            <a href="{{ route('register') }}" class="mr-4">Register</a>
        @endguest
    </div>
</nav>
