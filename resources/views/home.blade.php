<x-layout>
    <main class="py-10">
        <h1>Welcome to the home page</h1>
        <p>Olá {{ $name }}</p>
        <ul>
            @foreach ($habits as $habit)
                <li>{{ $habit }}</li>
            @endforeach
        </ul>
    </main>
</x-layout>
