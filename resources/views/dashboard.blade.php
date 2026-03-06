<x-layout>
    <main class="py-10 max-w-[1080px] mx-auto">
        <h1>Veja seus hábitos ganharem vida</h1>

        @auth
            <p>Bem-vindo(a) {{ auth()->user()->name }}</p>
        @endauth

        <div>
            <h2>Listagem dos hábitos</h2>

            <ul class="list-disc">
                @forelse ($habits as $item)
                    <li class="ml-4 text-xl font-bold">{{ $item->name }}
                        <span>{{ $item->created_at->format('d/m/Y H:m') }}</span>
                        <span class="text-zinc-400">[{{ $item->habitLogs->count() }}]</span>
                    </li>

                @empty
                    <p>Ainda não possui hábito cadastrado.</p>
                    <a href="/habito/cadastrar" class="bg-white p-2 border-2">Cadastre um novo hábito</a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>
