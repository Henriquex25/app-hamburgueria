<div class="w-full bg-gray-100/95 h-16 xl:h-20 px-3 xl:px-5 shadow-2xl shadow-black/80 flex justify-between items-center" x-data="topbar">
    {{-- Logo --}}
    <div>
        <img
            src="{{ url('img/logo-sem-fundo.png') }}"
            alt="Laravel Logo"
            class="h-20 w-20"
        >
    </div>

    {{-- Pesquisar --}}
    <div class="flex-1 px-3 xl:px-16">
        <input
            type="text"
            class="w-full h-12 px-5 text-gray-500 rounded-xl border border-primary-300"
            placeholder="Pesquisar..."
        >
    </div>

    {{-- Links de navegaçãi (Escondido em telas menores) --}}
    <nav class="hidden lg:flex">
        <ol class="flex space-x-5 text-primary-500 font-semibold">
            {{-- Cardápio --}}
            <li>
                <a
                    href=""
                    class="flex space-x-1.5"
                    wire:navigate
                >
                    <x-filament::icon
                        alias="panels::topbar.global-search.field"
                        icon="heroicon-o-home"
                        wire:target="search"
                        class="h-6 w-6 text-primary-500 dark:text-gray-400"
                    />
                    <span>Cardápio</span>
                </a>
            </li>

            {{-- Comanda --}}
            <li>
                <a
                    href=""
                    class="flex space-x-1.5"
                    wire:navigate
                >
                    <x-filament::icon
                        alias="panels::topbar.global-search.field"
                        icon="heroicon-o-shopping-bag"
                        wire:target="search"
                        class="h-6 w-6 text-primary-500 dark:text-gray-400"
                    />
                    <span>Comanda</span>
                </a>
            </li>
        </ol>
    </nav>

    <!-- Ícone de Menu "Hambúrguer" (Visível em telas pequenas) -->
    <div class="lg:hidden" x-on:click.outside="open = false">
        <button @click="open = !open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 text-primary-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- Menu de navegação mobile (mostrado quando o ícone é clicado) -->
        <div x-show="open" class="absolute right-9 min-w-[50%] mx-auto top-14 bg-white text-primary-500 space-y-5 p-4 rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.4)] border border-gray-100 flex flex-col" x-cloak x-transition>
            <a href="#" class="flex space-x-3">
                <x-filament::icon
                    alias="panels::topbar.global-search.field"
                    icon="heroicon-o-home"
                    wire:target="search"
                    class="h-6 w-6 text-primary-500 dark:text-gray-400"
                />

                <span>Cardápio</span>
            </a>
            <a href="#" class="flex space-x-3">
                <x-filament::icon
                    alias="panels::topbar.global-search.field"
                    icon="heroicon-o-shopping-bag"
                    wire:target="search"
                    class="h-6 w-6 text-primary-500 dark:text-gray-400"
                />
                <span>Comanda</span>
            </a>
        </div>
    </div>
</div>

@script
<script>
    Alpine.data("topbar", () => ({
        open: false,
    }))
</script>
@endscript
