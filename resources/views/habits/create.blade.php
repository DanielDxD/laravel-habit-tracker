<x-layout>
    <main class="grow flex flex-col items-center justify-center p-6 min-h-[calc(100vh-80px-100px)] relative">
        <!-- Decorative blobs -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-100/50 rounded-full blur-3xl -z-10 mix-blend-multiply">
        </div>

        <div class="w-full max-w-md">
            <!-- Back navigation -->
            <a href="{{ route('auth.dashboard') }}"
                class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-indigo-600 transition-colors mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l14 0"></path>
                    <path d="M5 12l6 6"></path>
                    <path d="M5 12l6 -6"></path>
                </svg>
                Voltar ao Dashboard
            </a>

            <!-- Form Card -->
            <div
                class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 sm:p-10 border border-slate-100/50 relative overflow-hidden">
                <!-- Top accent line -->
                <div class="absolute top-0 left-0 w-full h-1 bg-linear-to-r from-indigo-500 to-sky-400"></div>

                <div class="text-center mb-8">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50 text-indigo-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-800">Novo Hábito</h2>
                    <p class="text-slate-500 text-sm mt-2">Dê o primeiro passo para sua nova rotina.</p>
                </div>

                <form method="POST" action="{{ route('habits.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Qual hábito deseja
                            construir?</label>
                        <div class="relative">
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full px-4 py-3 bg-slate-50 border @error('name') border-rose-500 focus:ring-rose-500/20 @else border-slate-200 focus:ring-indigo-500/20 @enderror rounded-xl text-slate-800 focus:outline-hidden focus:ring-4 focus:bg-white focus:border-indigo-400 transition-all placeholder:text-slate-400"
                                placeholder="Ex: Ler 10 páginas por dia" required autofocus autocomplete="off">

                            @error('name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-rose-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-rose-500 flex items-start">
                                <span class="block">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-3.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-bold shadow-sm shadow-indigo-200 hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center justify-center gap-2">
                        <span>Salvar Hábito</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l14 0"></path>
                            <path d="M13 18l6 -6"></path>
                            <path d="M13 6l6 6"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-layout>
