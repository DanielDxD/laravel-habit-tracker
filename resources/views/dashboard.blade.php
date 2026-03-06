<x-layout>
    <main class="py-12 px-6 sm:px-10 max-w-[1200px] mx-auto w-full">
        <!-- Header Section -->
        <div class="mb-10 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Seus Hábitos</h1>
                @auth
                    <p class="text-slate-500 mt-1text-sm">Bem-vindo(a) de volta, <span
                            class="font-medium text-indigo-600">{{ auth()->user()->name }}</span>. Continue construindo sua
                        disciplina.</p>
                @endauth
            </div>

            <a href="{{ route('habits.create') }}"
                class="inline-flex items-center justify-center gap-2 bg-indigo-600 text-white font-medium text-sm px-5 py-2.5 rounded-full hover:bg-indigo-700 hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Novo Hábito
            </a>
        </div>

        <!-- Habits Grid -->
        @if ($habits->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($habits as $item)
                    <div
                        class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-md border border-slate-100 transition-all relative overflow-hidden flex flex-col">
                        <!-- Clickable area covering the whole card -->
                        <a href="{{ route('habits.show', $item->id) }}" class="absolute inset-0 z-0"
                            title="Ver detalhes do hábito {{ $item->name }}">
                            <span class="sr-only">Ver detalhes de {{ $item->name }}</span>
                        </a>

                        <!-- Card accent line -->
                        <div
                            class="absolute top-0 left-0 w-full h-1 bg-linear-to-r from-indigo-400 to-sky-400 opacity-0 group-hover:opacity-100 transition-opacity z-10">
                        </div>

                        <div class="flex justify-between items-start mb-4 relative z-10">
                            <h3 class="text-lg font-bold text-slate-800 line-clamp-2 leading-tight">{{ $item->name }}
                            </h3>
                            <div class="bg-indigo-50 text-indigo-600 text-xs font-bold px-2.5 py-1 rounded-full border border-indigo-100 whitespace-nowrap ml-3"
                                title="Registros concluídos">
                                {{ $item->habitLogs->count() }} ✓
                            </div>
                        </div>

                        <div
                            class="mt-auto pt-4 flex items-center justify-between text-xs text-slate-400 relative z-10">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                    </path>
                                    <path d="M16 3v4"></path>
                                    <path d="M8 3v4"></path>
                                    <path d="M4 11h16"></path>
                                    <path d="M11 15h1"></path>
                                    <path d="M12 15v3"></path>
                                </svg>
                                {{ $item->created_at->format('d/m/Y') }}
                            </span>

                            <!-- Action button needs higher z-index to be clickable over the anchor link overlay -->
                            <button
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-slate-50 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 transition-colors z-20"
                                title="Marcar como feito hoje" onclick="event.preventDefault();">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div
                class="w-20 h-20 bg-indigo-50 text-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    <path d="M9 12l2 2l4 -4"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-2">Ainda não possui hábitos</h3>
            <p class="text-slate-500 mb-8 max-w-sm mx-auto">Crie seu primeiro hábito agora e comece a rastrear sua
                consistência ao longo do tempo.</p>
            <a href="{{ route('habits.create') }}"
                class="inline-flex items-center gap-2 bg-indigo-600 text-white font-medium px-6 py-3 rounded-full hover:bg-indigo-700 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                Criar meu primeiro hábito
            </a>
            </div>
        @endif
    </main>
</x-layout>
