<x-layout>
    <main class="grow flex items-center justify-center p-6 min-h-[calc(100vh-80px-100px)]">
        <section
            class="w-full max-w-[440px] bg-white/80 backdrop-blur-md p-8 sm:p-10 rounded-2xl shadow-xl border border-white/50 relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-indigo-50 rounded-full blur-2xl -z-10"></div>

            <div class="text-center mb-8">
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">Bem-vindo(a) de volta</h1>
                <p class="text-sm text-slate-500 mt-2">Entre com sua conta para acessar seus hábitos.</p>
            </div>

            <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col gap-5">
                @csrf

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

                <button type="submit"
                    class="mt-2 w-full bg-indigo-600 text-white font-medium text-sm px-4 py-3 rounded-xl hover:bg-indigo-700 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all cursor-pointer">
                    Entrar
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-slate-500">
                Ainda não possui uma conta?
                <a href="{{ route('register.index') }}"
                    class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors">Registre-se</a>
            </p>
        </section>
    </main>
</x-layout>
