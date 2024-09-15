<div
    class="w-screen h-screen bg-cover bg-no-repeat bg-[url('http://laravel.test/img/bg-menu.jpg')] overflow-hidden"
    x-data="menu"
>
    <x-topbar />

    {{-- Categorias --}}
    <div
        class="w-[95%] xl:w-[90%] bg-gray-50 mt-3 overflow-x-auto mx-auto shadow-smooth rounded-xl flex items-center px-5 py-4 xl:py-4 font-semibold text-nowrap">
        <ul class="flex flex-row text-lg text-primary-500 space-x-5 select-none w-full">
            <li>Burgers</li>
            <li>Brownie recheado</li>
            <li>Porções</li>
            <li>Sobremesas</li>
            <li>Combos</li>
            <li>Bebidas</li>
            <li class="pr-5 lg:pr-0">Cerveja Longneck</li>
        </ul>
    </div>

    {{-- Itens --}}
    <div
        class="w-[94%] xl:w-[90%] bg-gray-50 h-[84%] lg:h-[82.3%] mx-auto mt-3 shadow-smooth rounded-2xl overflow-y-auto pb-4">
        <div class="py-4 px-12 grid grid-cols-1 xl:grid-cols-4 gap-12">

            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $item)
                {{-- Item --}}
                <div
                    class="flex flex-col items-center cursor-pointer select-none"
                    x-on:click="$dispatch('open-modal', { id: 'addItem' })"
                >
                    <img
                        src="{{ url('img/hamburguer.png') }}"
                        class="w-36 h-36"
                    />
                    <h4 class="text-xl text-primary-600 font-semibold">X-Salada</h4>
                    <p class="text-gray-500 h-12 overflow-y-auto w-full mt-2 lg:mt-0">Pão de gergelim, alfate, tomate,
                        queijo,
                        cebola,
                        hamburguer Pão de gergelim, alfate, tomate, queijo, cebola, hamburguer Pão de gergelim,
                        alfate,
                        tomate, queijo, cebola, hamburguer Pão de gergelim, alfate, tomate, queijo, cebola,
                        hamburguer
                    </p>
                    <span class="text-2xl font-bold text-primary-600 mt-2 xl:mt-0.5">R$ 20,00</span>
                </div>
            @endforeach
        </div>
    </div>

    <livewire:menu.add-item />
</div>


@script
    <script>
        Alpine.data("menu", () => ({
            itemDetails: {},
            showDetails: false,
            openDetails(item) {
                this.itemDetails = item;
                this.showDetails = true;
            },
            closeDetails() {
                this.itemDetails = {};
                this.showDetails = false;
            }
        }));
    </script>
@endscript
