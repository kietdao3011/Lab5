<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('images/2d7bc611112a82bb6b3643d496502e60.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }
        header {
            background-color: rgba(74, 85, 104, 0.8);
            padding: 1rem;
        }
        nav a {
            margin: 0 0.5rem;
            color: #fff;
        }
        main {
            padding: 2rem;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 0.5rem;
            margin: 2rem auto;
            max-width: 800px;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin: 0.5rem;
            border-radius: 0.375rem;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }
        .btn-blue {
            background-color: #4299e1;
        }
        .btn-blue:hover {
            background-color: #2b6cb0;
        }
        .btn-green {
            background-color: #48bb78;
        }
        .btn-green:hover {
            background-color: #2f855a;
        }
    </style>

    <header>
        <nav class="flex justify-end">
            <a href="{{ url('/books') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                BOOKS
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Logout
                </button>
            </form>
        </nav>
    </header>

    <main class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold">Welcome to library</h1>
        <p class="mt-4">Choose your favor books</p>
        <div class="mt-10">
            <a href="/Sachs" class="btn btn-blue">View Books</a>
            <a href="{{ url('/Sales') }}" class="btn btn-green">View Sales</a>
        </div>
    </main>
</x-app-layout>