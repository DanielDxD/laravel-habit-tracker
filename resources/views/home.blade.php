<x-layout>
    <main
        class="grow flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 py-20 min-h-[calc(100vh-80px-100px)] relative">
        <!-- Background decorative blob -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-100/40 rounded-full blur-3xl -z-10 mix-blend-multiply">
        </div>
        <div
            class="absolute top-1/3 left-1/3 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-sky-100/40 rounded-full blur-3xl -z-10 mix-blend-multiply">
        </div>

        <div class="max-w-3xl space-y-8">
            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.15]">
                Pequenos hábitos, <br class="hidden sm:block" />
                <span class="text-transparent bg-clip-text bg-linear-to-r from-indigo-600 to-sky-500">grandes
                    transformações</span>
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Construa sua disciplina diária, monitore seu progresso e alcance seus objetivos com nossa plataforma
                intuitiva e minimalista de rastreamento de hábitos.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                @auth
                    <a href="{{ route('auth.dashboard') }}"
                        class="w-full sm:w-auto px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full font-bold text-lg shadow-lg shadow-indigo-200 hover:shadow-xl hover:-translate-y-1 active:translate-y-0 transition-all">
                        Acessar meu Dashboard
                    </a>
                @endauth
                @guest
                    <a href="{{ route('register.index') }}"
                        class="w-full sm:w-auto px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full font-bold text-lg shadow-lg shadow-indigo-200 hover:shadow-xl hover:-translate-y-1 active:translate-y-0 transition-all">
                        Começar gratuitamente
                    </a>
                    <a href="{{ route('auth.index') }}"
                        class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-slate-50 text-slate-700 rounded-full font-bold text-lg shadow-sm border border-slate-200 hover:shadow-md transition-all">
                        Já tenho conta
                    </a>
                @endguest
            </div>

            <div class="pt-14 flex items-center justify-center gap-8 text-slate-400">
                <div class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-sky-500" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M12 7l0 5l3 3"></path>
                    </svg>
                    <span class="text-sm font-medium">Foco Diário</span>
                </div>
                <div class="w-px h-10 bg-slate-200"></div>
                <div class="flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-500" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 19l16 0"></path>
                        <path d="M4 15l4 -6l4 2l4 -5l4 4"></path>
                    </svg>
                    <span class="text-sm font-medium">Progresso Visual</span>
                </div>
                <div class="w-px h-10 bg-slate-200 hidden sm:block"></div>
                <div class="hidden sm:flex flex-col items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-emerald-500" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M9 12l2 2l4 -4"></path>
                    </svg>
                    <span class="text-sm font-medium">Recompensador</span>
                </div>
            </div>
        </div>
    </main>
</x-layout>
