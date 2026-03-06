<x-layout>
    <main class="grow flex items-center justify-center p-6 min-h-[calc(100vh-80px-100px)]">
        <section
            class="w-full max-w-[480px] bg-white/80 backdrop-blur-md p-8 sm:p-10 rounded-2xl shadow-xl border border-white/50 relative overflow-hidden mb-8 mt-4">
            <!-- Decorative circle -->
            <div class="absolute top-0 right-0 w-40 h-40 bg-indigo-50 rounded-full blur-3xl -z-10"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-sky-50 rounded-full blur-2xl -z-10"></div>

            <div class="text-center mb-8">
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">Crie sua conta</h1>
                <p class="text-sm text-slate-500 mt-2">Comece a construir sua disciplina hoje mesmo.</p>
            </div>

            <form action="{{ route('register.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5 ml-1">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Seu nome completo"
                        class="w-full bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all shadow-sm @error('name') border-rose-500 ring-rose-500/20 @enderror">
                    @error('name')
                        <p class="text-rose-500 text-xs font-medium mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5 ml-1">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="nome@email.com"
                        class="w-full bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all shadow-sm @error('email') border-rose-500 ring-rose-500/20 @enderror">
                    @error('email')
                        <p class="text-rose-500 text-xs font-medium mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5 ml-1">Senha</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="w-full bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all shadow-sm @error('password') border-rose-500 ring-rose-500/20 @enderror">
                    @error('password')
                        <p class="text-rose-500 text-xs font-medium mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation"
                        class="block text-sm font-medium text-slate-700 mb-1.5 ml-1">Confirmar Senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="••••••••"
                        class="w-full bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all shadow-sm @error('password_confirmation') border-rose-500 ring-rose-500/20 @enderror">
                    @error('password_confirmation')
                        <p class="text-rose-500 text-xs font-medium mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="mt-4 w-full bg-indigo-600 text-white font-medium text-sm px-4 py-3 rounded-xl hover:bg-indigo-700 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all cursor-pointer">
                    Criar conta
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-slate-500">
                Já possui uma conta?
                <a href="{{ route('auth.index') }}"
                    class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors">Faça login</a>
            </p>
        </section>
    </main>
</x-layout>
