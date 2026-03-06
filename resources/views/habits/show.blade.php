<x-layout>
    <main class="py-12 px-6 sm:px-10 max-w-[1200px] mx-auto w-full">
        <!-- Header / Back Navigation -->
        <div class="mb-8">
            <a href="{{ route('auth.dashboard') }}"
                class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-indigo-600 transition-colors mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l14 0"></path>
                    <path d="M5 12l6 6"></path>
                    <path d="M5 12l6 -6"></path>
                </svg>
                Voltar ao Dashboard
            </a>
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">{{ $habit->name }}</h1>
                    <p class="text-slate-500 mt-1 text-sm">
                        Criado em {{ $habit->created_at->format('d \d\e M, Y') }} · {{ $habit->habitLogs->count() }}
                        logs registrados
                    </p>
                </div>
            </div>
        </div>

        <!-- Heatmap Section -->
        <div class="bg-white border border-slate-100 rounded-2xl p-6 md:p-8 shadow-sm">
            <h2 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-500" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 19l16 0"></path>
                    <path d="M4 15l4 -6l4 2l4 -5l4 4"></path>
                </svg>
                Frequência (Último Ano)
            </h2>

            <div class="overflow-x-auto pb-4 custom-scrollbar">
                <div class="inline-flex flex-col gap-2 min-w-max">
                    <!-- Github-like Grid -->
                    <div
                        class="grid grid-cols-[repeat(53,minmax(0,1fr))] grid-rows-7 gap-[3px] md:gap-1.5 auto-cols-max">
                        @php
                            // To map rows representing days of the week (Sun to Sat)
                            $currentDayOfWeek = 0; // Starts arbitrary
                        @endphp

                        @foreach ($heatmapData as $dateStr => $data)
                            @php
                                $isDone = $data['done'];
                                $count = $data['count'];
                                $dateObj = \Carbon\Carbon::parse($dateStr);

                                // Tooltip text
                                $title = $dateObj->format('d/m/Y') . ($isDone ? ": {$count} logs" : ': Sem registros');

                                // Define Color
                                // If 0: slate-100, if > 0 varying degrees of emerald
                                $colorClass = 'bg-slate-100/80 hover:bg-slate-200';
                                if ($count === 1) {
                                    $colorClass = 'bg-emerald-300 hover:bg-emerald-400';
                                } elseif ($count === 2) {
                                    $colorClass = 'bg-emerald-400 hover:bg-emerald-500';
                                } elseif ($count > 2) {
                                    $colorClass = 'bg-emerald-500 hover:bg-emerald-600 shadow-sm shadow-emerald-200/50';
                                }
                            @endphp

                            <!-- Heatmap Cell -->
                            <div class="w-[12px] h-[12px] md:w-[14px] md:h-[14px] rounded-sm transition-colors duration-200 {{ $colorClass }} cursor-help"
                                title="{{ $title }}"></div>
                        @endforeach
                    </div>

                    <!-- Labels -->
                    <div class="flex justify-between mt-2 text-xs font-medium text-slate-400">
                        <span>Menos</span>
                        <div class="flex items-center gap-[3px] mx-2">
                            <div class="w-3 h-3 rounded-sm bg-slate-100"></div>
                            <div class="w-3 h-3 rounded-sm bg-emerald-300"></div>
                            <div class="w-3 h-3 rounded-sm bg-emerald-400"></div>
                            <div class="w-3 h-3 rounded-sm bg-emerald-500 shadow-sm shadow-emerald-200/50"></div>
                        </div>
                        <span>Mais</span>
                    </div>
                </div>
            </div>
            <style>
                /* Custom Scrollbar specifically for the heatmap container for a cleaner look */
                .custom-scrollbar::-webkit-scrollbar {
                    height: 6px;
                }

                .custom-scrollbar::-webkit-scrollbar-track {
                    background: transparent;
                }

                .custom-scrollbar::-webkit-scrollbar-thumb {
                    background: #cbd5e1;
                    border-radius: 10px;
                }

                .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                    background: #94a3b8;
                }
            </style>
        </div>
    </main>
</x-layout>
