<x-layout>
   <div class=" flex flex-col gap-5">
     <section class="flex h-full flex-row w-full justify-between items-center">
        <div>
            <h1 class="font-bold text-2xl">Product Catalogue</h1>
            <p class="text-secondary">Explore out pawduct you might like!</p>
        </div>
        <div class="relative">
            <button class="categories ring-1 ring-secondary  rounded-2xl py-1.5 px-4  ">Categories</button>
           <div class="categories-option absolute flex ring-1 ring-secondary p-4 gap-2 md:right-0 lg:right-auto lg:left-0 mt-3 transition-all duration-300 ease-in-out flex-col opacity-0 invisible -translate-y-2 w-40 rounded-2xl">
                <div class="border-b border-secondary/20 py-2">
                    <input type="checkbox">
                    Makanan
                </div>
                <div class="border-b border-secondary/20 py-2">
                    <input type="checkbox">
                    Obat
                </div>
                <div class="border-b border-secondary/20 py-2">
                    <input type="checkbox">
                    Mainan
                </div>
                <div class="border-b border-secondary/20 py-2">
                    <input type="checkbox">
                    Peralatan
                </div>
            </div>
        </div>
    </section>

    <section>
        <h1>This is catalagodassdasdaur</h1>
    </section>
   </div>

</x-layout>