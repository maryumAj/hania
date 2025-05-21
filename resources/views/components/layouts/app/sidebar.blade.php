<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-100 dark:bg-zinc-900 border-r dark:border-zinc-700 p-4 space-y-4">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 text-xl font-bold text-zinc-800 dark:text-white">
            <x-app-logo />
            <span>Dashboard</span>
        </a>

        <nav class="space-y-2 text-sm text-zinc-700 dark:text-zinc-300">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'font-semibold' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('students.index') }}" class="{{ request()->routeIs('students.*') ? 'font-semibold' : '' }}">
                Manage Students
            </a>
        </nav>

        <div class="mt-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-red-500 hover:underline">Log Out</button>
            </form>
        </div>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-6">
        {{ $slot }}
    </main>

</body>
</html>
