<x-layout>
    <main class="py-10 max-w-[1080px] mx-auto">
        <h1>Veja seus hábitos ganharem vida</h1>

        @auth
            <p>Bem-vindo(a) {{ auth()->user()->name }}</p>
        @endauth
    </main>
</x-layout>
