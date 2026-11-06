<nav class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <h1 class="text-2xl font-bold">Perpustakaan</h1>
        </div>
        <div class="flex items-center space-x-4">
            @auth
                <span class="text-sm">{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
                @if (auth()->user()->isAdmin())
                    <a href="{{ route('users.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Manajemen User</a>
                @endif
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:bg-blue-700 px-3 py-2 rounded">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Login</a>
            @endauth
        </div>
    </div>
</nav>
