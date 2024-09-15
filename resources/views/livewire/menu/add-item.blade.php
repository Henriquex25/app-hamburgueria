<div>
    <x-filament::modal
        id="addItem"
        width="3xl"
    >
        <x-slot name="heading">
            <h3 class="text-center text-primary-500 font-bold text-2xl">Adicionar Item</h3>
        </x-slot>

        {{-- Content --}}
        <div class="flex items-center flex-col w-full select-none">
            {{-- Image --}}
            <div>
                <img
                    src="{{ url('img/hamburguer.png') }}"
                    class="w-80 h-80"
                >
            </div>

            {{-- Label --}}
            <div>
                <h4 class="text-center text-2xl font-semibold text-primary-500">X-Salada</h4>
            </div>

            {{-- Price --}}
            <div>
                <span class="text-3xl font-bold text-primary-500 mt-2">R$ 20,00</span>
            </div>

            {{-- ingredientes --}}
            <div class="flex flex-col mt-5 w-full px-10">

                {{-- Pão --}}
                <div>
                    <label class="px-2 text-lg text-gray-700 mb-2 font-semibold">Pão</label>
                    <x-filament::input.wrapper>
                        <x-filament::input.select>
                            <option value="draft">Gergelin</option>
                            <option value="reviewing">Francês</option>
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                </div>

                {{-- Alface --}}
                <div class="mt-3">
                    <label class="px-2 text-lg text-gray-700 mb-2 font-semibold">Alface</label>
                    <x-filament::input.wrapper>
                        <x-filament::input.select>
                            <option value="draft">Gergelin</option>
                            <option value="reviewing">Francês</option>
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                </div>

                {{-- Hambuguer --}}
                <div class="mt-3">
                    <label class="px-2 text-lg text-gray-700 mb-2 font-semibold">Hamburger</label>
                    <x-filament::input.wrapper>
                        <x-filament::input.select>
                            <option value="draft">Bovino</option>
                            <option value="reviewing">Suíno</option>
                            <option value="reviewing">Frango</option>
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                </div>

            </div>

        </div>

        <x-slot name="footer">
            <div class="px-10 mt-4 select-none">
                <x-filament::button class="w-full">
                    <span class="text-lg">Adicionar</span>
                </x-filament::button>
            </div>


        </x-slot>

    </x-filament::modal>
</div>
