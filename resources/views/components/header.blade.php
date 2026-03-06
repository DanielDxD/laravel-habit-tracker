<header
    class="sticky top-0 z-50 bg-white/70 backdrop-blur-md border-b border-white/20 shadow-sm flex items-center justify-between p-4 px-6 sm:px-10 transition-all">
    <div class="font-bold text-xl tracking-tight text-indigo-900 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
            <path d="M12 12l3 2"></path>
            <path d="M12 7v5"></path>
        </svg>
        <span>HabitTracker</span>
    </div>

    <nav class="flex items-center gap-4">
        @auth
            <a href="{{ route('auth.dashboard') }}"
                class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Dashboard</a>
            <form action="{{ route('auth.logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit"
                    class="text-sm font-medium bg-slate-100 text-slate-700 hover:bg-slate-200 py-2 px-5 rounded-full transition-colors">Sair</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('auth.index') }}"
                class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Entrar</a>
            <a href="{{ route('register.index') }}"
                class="text-sm font-medium bg-indigo-600 text-white hover:bg-indigo-700 py-2 px-5 rounded-full transition-all hover:shadow-md hover:-translate-y-0.5 active:translate-y-0">Criar
                Conta</a>
        @endguest
    </nav>
</header>
