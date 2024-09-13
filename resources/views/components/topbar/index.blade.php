<div class="w-full bg-gray-100/95 h-20 px-5 shadow-2xl shadow-black/80 flex justify-between items-center">
    {{-- Logo --}}
    <div>
        <img src="{{ url('img/logo-sem-fundo.png') }}" alt="Laravel Logo" class="h-20">
    </div>

    {{-- Pesquisar --}}
    <div class="flex-1 px-20">
        <input type="text" class="w-full h-12 px-5 text-gray-500 rounded-xl border border-amber-300" placeholder="Pesquisar">
    </div>

    {{-- Menu --}}
    <div>
        <ul class="flex space-x-5 text-amber-500 font-semibold">
            {{-- Cardápio --}}
            <li>
                <a href="" class="flex space-x-1.5" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      <span>Cardápio</span>
                </a>
            </li>

            {{-- Comanda --}}
            <li>
                <a href="" class="flex space-x-1.5" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span>Comanda</span>
                </a>
            </li>
        </ul>
    </div>
</div>