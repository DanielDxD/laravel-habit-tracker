<x-layout>
    <main class="py-10">
        <section class="max-w-[600px] mx-auto p-10 border-2 mt-4 bg-white">
            <h1 class="text-3xl font-bold mb-10">Entre com sua conta</h1>

            <form class="flex flex-col gap-4" action="{{ route('auth.login') }}" method="POST">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail"
                        class="bg-white p-2 border-2 rounded-md @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha"
                        class="bg-white p-2 border-2 rounded-md @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md cursor-pointer">Entrar</button>
            </form>
        </section>
    </main>
</x-layout>
