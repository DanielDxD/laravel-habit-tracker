<x-layout>
    <main class="py-10 max-w-[720px] mx-auto px-2">
        <h1 class="text-3xl font-bold mb-10">Entre com sua conta</h1>

        <form class="flex flex-col gap-4" action="/login" method="POST">
            @csrf

            <div>
                @error('email')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <input type="email" name="email" id="email" placeholder="E-mail" required
                class="bg-white p-2 border-2 rounded-md">
            <input type="password" name="password" id="password" placeholder="Senha" required
                class="bg-white p-2 border-2 rounded-md">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md cursor-pointer">Entrar</button>
        </form>


    </main>
</x-layout>
