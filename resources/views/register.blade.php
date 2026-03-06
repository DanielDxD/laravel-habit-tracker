<x-layout>
    <main class="py-10">
        <section class="max-w-[600px] mx-auto p-10 border-2 mt-4 bg-white">
            <h1 class="text-3xl font-bold mb-10">Crie sua conta</h1>

            <form class="flex flex-col gap-4" action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome"
                        class="bg-white p-2 border-2 rounded-md @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
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
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">Confirmar Senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirmar Senha"
                        class="bg-white p-2 border-2 rounded-md @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md cursor-pointer">Entrar</button>
            </form>
            <p class="mt-4">Já possui uma conta? <a href="{{ route('auth.index') }}" class="text-blue-500">Faça
                    login</a>
            </p>
        </section>
    </main>
</x-layout>
